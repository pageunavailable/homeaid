<?php
    require("configuration/localhost.php");
    require("model/model.php");
    session_start();

    $page = "page_{$_GET['page']}";
    $result = function_exists($page);

    if($result){
        $page();
    }
    else{
        page_home();
    }

    function pageLoader($body, $values = array()){
        if($_SESSION['login-error']){
            $login = '';        
        } 
        else{
            $login = 'hide';
        }
        
        $header = file_get_contents("view/template/header.html");
        $header = str_replace("--css-page--", $body['css-page'], $header);
        $header = str_replace("--login--", $login, $header);    
        $body = file_get_contents("view/{$body['body']}");
        $footer = file_get_contents("view/template/footer.html");
        $output = $header . $body . $footer;
        
        foreach($values as $x => $value)
        {
            $key = "--{$x}--";
            $output = str_replace($key, $value, $output);
        }
        session_destroy();
        return $output;    
    }

    function page_home(){
        $body['css-page'] = "home.css";
        $body['body'] = 'home.html';

        $home = modelHome_get();
        $thisPage = pageLoader($body, $home);
        echo $thisPage;    
    }

    function page_about(){    
        $body['css-page'] = "about.css";
        $body['body'] = 'about.html';

        $about = modelAbout_get();
        $values['title'] = $about['title'];
        $values['caption'] = $about['caption'];
        $values['subtitle'] = $about['subtitle'];
        $values['content'] = $about['content'];
        $values['about-image'] = $about['photo'];       

        $thisPage = pageLoader($body, $values);
        echo $thisPage;  
    }



    function page_contact(){
        if($_POST['send']){
            $data['list_message_name'] = $_POST['list_message_name'];
            $data['list_message_surname'] = $_POST['list_message_surname'];
            $data['list_message_company'] = $_POST['list_message_company'];
            $data['list_message_email'] = $_POST['list_message_email'];
            $data['list_message_mobile'] = $_POST['list_message_mobile'];
            $data['list_message_subject'] = $_POST['list_message_subject'];
            $data['list_message_content'] = $_POST['list_message_content'];
            sql_insert($data, 'list_message');
            header("Location: /?page=contact&success=true");
            die();
        }    

        $body['css-page'] = "contact.css";
        $body['body'] = 'contact.html';
        
        $contact = modelContact_get();
        if($_GET['success']){                 
            $contact['contact-sent'] = '';
        }
        else{
            $contact['contact-sent'] = 'hide';
        }

        $thisPage = pageLoader($body, $contact);
        echo $thisPage;
    }
?>