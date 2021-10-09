<?php
    $GLOBALS['sql-connection'] = sql_connect();

    function sql_connect(){  
        $sql_host = CONFIG_DB_HOST;
        $sql_user = CONFIG_DB_USER;
        $sql_pass = CONFIG_DB_PASS;
        $sql_db = CONFIG_DB_DBNAME;
        $conn = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);
        $conn_error = mysqli_connect_error();    
        if($conn_error){
            echo $conn_error;
            echo "Unable to establish a connection with the database.";
            die();
        }
        else{
            return $conn;
        }
    }

    function sql_select($query){
        $result = mysqli_query($GLOBALS['sql-connection'], $query);
        if (!$result) {
            echo mysqli_error($GLOBALS['sql-connection']);
            die();
        }
        $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $fetch;
    }

    function sql_insert($data, $table){
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = "'{$value}'";
        }
        $column = implode(',', $keys);
        $value = implode(',', $values);
        $query = "INSERT INTO {$table} ({$column}) VALUES ({$value});";

        $result = mysqli_query($GLOBALS['sql-connection'], $query);
        if (!$result) {
            echo mysqli_error($GLOBALS['sql-connection']);
            die();
        }
    }

    function login($email, $password){
        $query = "SELECT * FROM account WHERE account_email = '{$email}' AND account_password = '{$password}'";
        $row = sql_select($query);
        return $row[0];
    }
    
    function modelHome_get(){
        $home = sql_select("SELECT * FROM home WHERE home_id = 1");
        $home = $home[0];
        $data['banner'] = $home['home_banner'];
        $data['title'] = $home['home_title'];
        $data['caption'] = $home['home_caption'];
        $data['subtitle'] = $home['home_subtitle'];
        $data['subtitle-caption'] = $home['home_subtitle_caption'];
        return $data;
    }

    function modelAbout_get(){
        $about = sql_select("SELECT * FROM about");
        $about = $about[0];
        $data['title'] = $about['about_title'];
        $data['caption'] = $about['about_caption'];
        $data['subtitle'] = $about['about_subtitle'];
        $data['content'] = $about['about_content'];
        $data['photo'] = $about['about_photo'];
        return $data;
    }
    
    function modelContact_get(){
        $contact = sql_select("SELECT * FROM contact");
        $contact = $contact[0];
        $data['title'] = $contact['contact_title'];
        $data['caption'] = $contact['contact_caption'];
        $data['content'] = $contact['contact_content'];
        return $data;
    }

    function modelAccount_get($account_id){
        $data = sql_select("SELECT * FROM account WHERE account_id = '{$account_id}'");
        return $data[0];
    }

    function modelHomeArticle_get(){
        $row1['title'] = "The Ultimate Guide to HTML and CSS";
        $row1['body'] = "*insert text here*";
        $row1['data'] = "12:00 PM";

        $row2['title'] = "Database 101";
        $row2['body'] = "*insert data here*";
        $row2['data'] = "4:20 AM";

        $row3['title'] = "Server Security Basics";
        $row3['body'] = "*insert narrative here*";
        $row3['data'] = "6:09 PM";

        $data[] = $row1;
        $data[] = $row2;
        $data[] = $row3;

        return $data;
    }

    function modelMessage_get(){
        $row1['from'] = "John Wick";
        $row1['subject'] = "I'm coming for you.";
        $row1['date'] = "3:00 AM";

        $row2['from'] = "Mario Mario";
        $row2['subject'] = "It'sa me, Mario!";
        $row2['date'] = "11:00 AM";
        
        $row3['from'] = "Salvador Panelo";
        $row3['subject'] = "Community Health Guidelines";
        $row3['date'] = "6:00 PM";

        $data[] = $row1;
        $data[] = $row2;
        $data[] = $row3;

        return $data;
    }
?>