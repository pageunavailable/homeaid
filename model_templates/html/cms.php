<?php
require("configuration/localhost.php");
session_start();

require("model/model.php");

$page = "page_{$_GET['page']}";
$result = function_exists($page);

# Global variable vs Local Variable

if($result)
{
    $page();
}
else
{    
    page_dashboard();
}


#------------------------------
# Helper Functions
#------------------------------

function check_session()
{
    $data = modelAccount_get($_SESSION['user']['account_id']);      
    $verifyToken = md5($data['account_email'] . $data['account_password']);  # cyclic redundancy check
    
    if($_SESSION['token'] != $verifyToken)
    {
       header("Location: /index.php");
       die();
    }   
    return $data;
}

#------------------------------
# Pages
#------------------------------

#
# Action Pages
#
function page_authentication()
{       
    $username = $_POST['username'];
    $password = $_POST['password'];    

    $login = login($username, $password);

    if($login)
    {   
        $_SESSION['user'] = $login;     
        $_SESSION['token'] = md5($username . $password);
        header("Location: /cms.php");
    }
    else
    {        
        $_SESSION['login-error'] = true;
        header("Location: /");
    }    
}

function page_logout()
{
    session_destroy();
    header("Location: /index.php");
}

#
# View Pages
#


function page_dashboard()
{
    $account = check_session();
    $body = 'cms-dashboard.php';

    $header['title'] = 'CMS Dashboard';
    $header['name'] = $account['account_name'];

    require("view/template/cms/header.php");
    require("view/{$body}");
    require("view/template/cms/footer.php");

}

function page_account_setting()
{
    $account = check_session();
    $body = 'cms-account-setting.php';

    $header['title'] = 'CMS Account Setting';
    $header['name'] = $account['account_name'];

    require("view/template/cms/header.php");
    require("view/{$body}");
    require("view/template/cms/footer.php");

}

function page_home_setting()
{
    $account = check_session();
    $data = modelHome_get();

    $body = 'cms-home-setting.php';

    $header['title'] = 'CMS Home Setting';
    $header['name'] = $account['account_name'];

    require("view/template/cms/header.php");
    require("view/{$body}");
    require("view/template/cms/footer.php");

}

function page_upload()
{   
    # Allowed Exstensions
    $extensions[] = 'png';
    $extensions[] = 'jpg'; 
    # Get Extension
    $file_name = $_FILES['home_banner']['name'];
    $ext = substr($file_name, -3);
    # Verify Extension
    $valid = in_array($ext, $extensions);
    if(!$valid)
    {
        echo "{$ext} is not allowed";
        die();
    }    
    # Unix Epoch Time
    $fileName =  md5(time() . $file_name) . "." . $ext;
 

    # UPDATE TABLE SET column_name = 'new value' WHERE column = 'value'
    $data['home_banner'] = $fileName;
    $data['home_title'] = $_POST['home_title'];
    $data['home_caption'] = $_POST['home_caption'];
    $data['home_subtitle'] = $_POST['home_subtitle'];
    $data['home_subtitle_caption'] = $_POST['home_subtitle_caption'];

    sql_update('home', 'home_id', '1', $data);
     
    # Get data from temp file
    $data = file_get_contents($_FILES['home_banner']['tmp_name']);
    # Write data
    file_put_contents("view/images/$fileName", $data);     
    header("Location: /cms.php?page=home_setting");
}

function sql_update($tableName, $refColumn, $refValue, $data)
{
    
    foreach($data as $key => $value)
    {
        $sets[] = "{$key} = '{$value}'";
    }
    $sets = implode(',', $sets);

    $query = "UPDATE {$tableName} SET {$sets} WHERE {$refColumn} = '{$refValue}'";
    
    $result = mysqli_query($GLOBALS['sql-connection'], $query);
    if(!$result)
    {
        echo mysqli_error($GLOBALS['sql-connection']);
        die();
    }    
}


function page_home_article()
{
    $account = modelAccount_get();
    $data = modelHomeArticle_get();

    $body = 'cms-home-article.php';

    $header['title'] = 'CMS Home Article';
    $header['name'] = $account['name'];

    $template = file_get_contents('view/template/cms/article-row.html');
    $tempRow = "";
    $output = "";
    foreach($data as $row)
    {
        $tempRow = $template;
        foreach($row as $key => $value) {
            $key = "--{$key}--";
            $tempRow = str_replace($key, $value, $tempRow);
        }
       $output = $output . $tempRow;
    }

    require("view/template/cms/header.php");
    require("view/{$body}");
    require("view/template/cms/footer.php");
}

function page_message()
{
    $account = modelAccount_get();
    $data = modelMessage_get();

    $body = 'cms-message.php';

    $header['title'] = 'CMS Messages';
    $header['name'] = $account['name'];

    $template = file_get_contents('view/template/cms/message-row.html');
    $tempRow = "";
    $output = "";
    foreach($data as $row)
    {
        $tempRow = $template;
        foreach($row as $key => $value) {
            $key = "--{$key}--";
            $tempRow = str_replace($key, $value, $tempRow);
        }
       $output = $output . $tempRow;
    }

    require("view/template/cms/header.php");
    require("view/{$body}");
    require("view/template/cms/footer.php");
}