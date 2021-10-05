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
            echo "Unable to establish database connection";
            die();
        }
        else {
            return $conn;
        }
    }

    function sql_select($query){    
        $result = mysqli_query($GLOBALS['sql-connection'], $query);
        if(!$result){
            echo mysqli_error($GLOBALS['sql-connection']);
            die();
        }
        $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $fetch;
    }

    function sql_insert($data, $table){
        foreach($data as $key => $value){
            $keys[] = $key;
            $values[] = "'{$value}'";
        }
        $column = implode(',', $keys);
        $value = implode(',', $values);
        $query = "INSERT INTO {$table} ({$column}) VALUES ({$value})";

        $result = mysqli_query($GLOBALS['sql-connection'], $query);
        if(!$result){
            echo mysqli_error($GLOBALS['sql-connection']);
            die();
        }    
    }

    function pr($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    function login($email, $password){
        $query = "select * from account where account_email = '{$email}' 
        AND account_password = '{$password}' " ;   
        $row = sql_select($query);
        return $row[0];
    }

    function modelHome_get(){
        $home = sql_select("select * from home where home_id = 1");
        $home = $home[0];
        $data['banner'] = $home['home_banner'];
        $data['title'] = $home['home_title'];
        $data['caption'] = $home['home_caption'];
        $data['subtitle'] = $home['home_subtitle'];
        $data['subtitle-caption'] = $home['home_subtitle_caption'];
        return $data;
    }

    function modelAbout_get(){
        $about = sql_select("select * from about");
        $about = $about[0];
        $data['title'] = $about['about_title'];
        $data['caption'] = $about['about_caption'];
        $data['subtitle'] = $about['about_subtitile'];
        $data['content'] = $about['about_content'];
        $data['photo'] = $about['about_photo'];
        return $data;
    }

    function modelContact_get(){    
        $contact = sql_select("select * from contact");
        $contact = $contact[0];    
        $data['title'] = $contact['contact_title'];
        $data['caption'] = $contact['contact_caption'];
        $data['content'] = $contact['contact_content'];
        
        return $data;
    }

    function modelAccount_get($account_id){    
        $data = sql_select("select * from account where account_id = '{$account_id}' ");
        return $data[0];
    }

    function modelHomeArticle_get(){
        $row1['title'] = "The Ultimate Guide to HTML and CSS";
        $row1['body'] = "Body here";
        $row1['date'] = "01:30 PM";

        $row2['title'] = "Introduction to Database";
        $row2['body'] = "Body here";
        $row2['date'] = "10:45 AM";

        $row3['title'] = "Making your server secure";
        $row3['body'] = "Body here";
        $row3['date'] = "11:20 AM";

        $data[] = $row1; #$data[0] = $row1;
        $data[] = $row2; #$data[1] = $row2;
        $data[] = $row3; #$data[3] = $row3;

        return $data;
    }

    function modelMessage_get(){
        $row1['from'] = "Paolo Avelino";
        $row1['subject'] = "MMFF review";
        $row1['date'] = "01:30 PM";

        $row2['from'] = "Tito Boy";
        $row2['subject'] = "Me like it";
        $row2['date'] = "01:30 PM";

        $data[] = $row1; #$data[0] = $row1;
        $data[] = $row2; #$data[1] = $row2;    

        return $data;
    }
?>