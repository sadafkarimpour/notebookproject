<?php

require_once "models/UserModel.php";
require_once "database.php";

/**
 * check if 'user' table exists
 * if table not exists, create table
 * این تابع قبل از تمام توابع دیگه این کلاس اجرا می شه
 * و بررسی می کنه آیا جدول user در دیتابیس وجود داره یا نه
 * اگر وجود نداشته باشد جدول مورد نیاز ایجاد می شود
 *
 * @return void
 */
function checkUserTable(){
    global $connect;
    $tbl="CREATE TABLE IF NOT EXISTS `user` (
        `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `fname` varchar(255) NOT NULL,
        `lname` varchar(255) NOT NULL,
        `username` varchar(255) NOT NULL,
        `phone_number` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `passwordd` varchar(255) NOT NULL)";
      
      if(!mysqli_query($connect,$tbl)){
        echo "table not created";
      }
      mysqli_close($connect);
}

// ----------------------------------------------------------------------------

/**
 * این تابع صفحه لاگین کاربران را نمایش می دهد
 *
 * @return void
 */
function login(){
    require_once "view/authlogin.php";

}

// ----------------------------------------------------------------------------

/**
 * زمانی که کاربر بر روی کلید لاگین در فرم لاگین کلید می کند اطلاعات فرم از طریق پست و 
 * به صورت ایجکس به این تابع ارسال می شوند و 
 * عملیات لاگین در این تابع انجام می شود و نتیجه لاگین به صورت جیسون برگردانده می شود
 *
 * @return void
 */
function doLogin(){

}

// ----------------------------------------------------------------------------

/**
 * زمانی کاربر می خواهد از حساب کاربری خود خارج شود این تابع به صورت 
 * get یا post 
 * فراخوانی می شود و کاربر لاگ اوت می شود
 *
 * @return void
 */
function logout(){

}

// ----------------------------------------------------------------------------

/**
 * این تابع فرم ثبت نام را نمایش می دهد
 *
 * @return void
 */
function register(){
    require_once "view/authRegister.php";
}

// ----------------------------------------------------------------------------

/**
 * این تابع اطلاعات را از پست دریافت کرده
 * و عملیات مربوط به ثبت نام کاربر جدید را انجام می دهد
 * و نتیجه را به صورت حیسون برمی کرداند
 *
 * @return void
 */
function doRegister(){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $passwordd= $_POST['passwordd'];
  
    $result = new UserModel();
    $result->insert($fname, $lname, $username, $email, $passwordd);
  
    // Prepare the response as a JSON object
    $response = array("statusCode" => $result);
  
    // Return the response as a JSON string
    echo json_encode($response);
}

// ----------------------------------------------------------------------------

checkUserTable();

$action = $_GET["action"];


switch ($action) {
    case 'login':
        login();
        break;

    case 'dologin':
        doLogin();
        break;

    case 'logout':
        logout();
        break;

    case 'register':
        register();
        break;

    case 'doregister':
        doRegister();
        break;
    
    default:
        # code...
        echo "action not found";
        break;
}