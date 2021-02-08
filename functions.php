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
    echo $_POST['gem_id']."<br>";
    echo $_POST['name']."<br>";
    echo $_POST['email']."<br>";
    echo $_POST['quantity']."<br>";
    echo date('Y-m-d H:i:s')."<br>";

    //儲存訂單


    //轉變頁面
    header("Location: /order-completed.php");
}