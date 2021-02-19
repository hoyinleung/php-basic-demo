<?php
include 'dbConnect.php';

$op ='none';
if(isset($_GET['op'])) $op = $_GET['op'];

if($op=='createOrder')
{
    createOrder();
}
if($op=='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);
}
if($op=='logout')
{
    logout();
}

function isStaff()
{
    return isset($_SESSION['email']);
}
function logout()
{
    session_start();
    session_destroy();
    header("Location: /");
}
function checkLogin($email, $password)
{
    global $dbConnection;
    $staffQ = mysqli_query($dbConnection, "SELECT * FROM `staff` WHERE `email`='".$email."'");

    $staff = mysqli_fetch_assoc($staffQ);

    /* $staffEmail     =   "hello@leunghoyin.hk";
    $staffPassword  =   "password123"; */

    if($email == $staff['email'] && $staff['password'] == $password)
    {
        //認證是一個職員 SESSION
        session_start();
        $_SESSION['email'] = $email;

        header("Location: /allOrders.php");
    }
    else
    {
        header("Location: /login.php");
    }
}
function createOrder(){

    global $dbConnection;
    /* echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>"; */

    //儲存訂單
    $sql = "INSERT INTO `php_gem`.`order` (
        `client_name`, 
        `client_email`,
         `quantity`, 
         `order_time`, 
         `gem_id`
         ) VALUES (
         '{$_POST['name']}', 
         '{$_POST['email']}',
         {$_POST['quantity']}, 
         '".date('Y-m-d H:i:s')."',
         {$_POST['gem_id']})";

    //寫入MySQL資料庫
    if(mysqli_query($dbConnection, $sql))
    {
        //你可以在這裡減去gem table的remaining存貨

        //轉變頁面
        header("Location: /order-completed.php");
    }
    else{
        //你可以加你的order失敗頁
    }

    /* $myfile = fopen("data.csv", "a") or die("未能開啟檔案");
    $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    fwrite($myfile, $data);
    fclose($myfile); */

    
}