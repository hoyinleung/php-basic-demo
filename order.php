<?php include_once 'header.php'; ?>

<form action="/functions.php?op=createOrder" method="post">

  <label for="gem_name">預定產品名稱 </label>
  <input type="hidden" id="gem_id" name="gem_id" value="<?php echo $_GET['gem_id'];?>">
  
  <h2><?php echo $gems[$_GET['gem_id']-1]['name'];?></h2>

  <label for="name">你的稱呼:</label>
  <input type="text" id="name" name="name"><br/>

  <label for="email">你的電郵:</label>
  <input type="email" id="email" name="email" require><br/>

  <label for="quantity">購買數量:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="下單預訂">
</form> 

<?php include_once 'footer.php';?>