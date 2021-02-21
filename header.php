<?php
session_start();
include_once 'stock.php';
include_once 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>寶石預訂</title>
    <link rel="stylesheet" href="/css/css.css">
</head>
<body>
<nav>
<ul class="clientMenu">
        <li><a href="/">首頁</a></li>
        <li><a href="/about.php">關於</a></li>
</ul>
<ul class="staffMenu">
    <?php 
    if ($_SESSION)
    {
        echo '
            <li><a href="/allOrders.php">所有訂單</a></li>
            <li><a href="/functions.php?op=logout">登出</a></li>';
    }
    else
    {
        echo '<li><a href="/login.php">職員登入</a></li>';
    }
    ?>
</ul>
</nav>