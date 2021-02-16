<?php include('header.php'); 
include('functions.php'); 

//不是職員的不可以觀看訂單
if(!isStaff()) header("Location: /");
?>

<h1>收到的訂單</h1>
<h2>你的登入電郵是:<?php echo $_SESSION['email'];?></h2>

<?php
//拿訪客的訂單資料
$orderData = file_get_contents('data.csv');
$orders = str_getcsv($orderData, "\r\n");

//顯示所有訂單
foreach($orders as $order)
{
    //拆解每一單的幾個資料
    $singleOrder = explode(",", $order);

    echo '<div class="order"><p>';
    echo '客戶稱呼 : '.$singleOrder[1].'<br/>';
    echo '客戶電郵 : '.$singleOrder[2].'<br/>';
    echo '想預訂 : '.$gems[$singleOrder[0]-1]['name'].' X '.$singleOrder[3].'件 <br/>';
    echo '下單時間 : '.$singleOrder[4].'<br/>';
    echo '</p></div>';
}
?>

<?php include('footer.php'); ?>