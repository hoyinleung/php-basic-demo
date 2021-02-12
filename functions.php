<?php
if($_GET['op']=='createOrder')
{
    createOrder();
}
if($_GET['op']=='logout')
{
    echo '登出頁';
}

function createOrder(){
    /* echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>"; */

    //儲存訂單
    $myfile = fopen("data.csv", "a") or die("未能開啟檔案");
    $data = $_POST['gem_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    fwrite($myfile, $data);
    fclose($myfile);

    //轉變頁面
    header("Location: /order-completed.php");
}