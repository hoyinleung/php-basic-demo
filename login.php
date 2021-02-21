<?php include_once('header.php'); ?>

<form action="functions.php?op=checkLogin" method="post">

  <label for="email">電郵:</label>
  <input type="email" id="email" name="email" require><br>
  
  <label for="email">密碼:</label>
  <input type="password" id="password" name="password">
  
  <br>
  <input type="submit" value="登入">
</form> 

<?php include_once('footer.php'); ?>