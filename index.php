<html>
<meta charset="utf-8" />
<style type="text/css">
body {
	background-image: url(bizhi.jpg);
	background-color: #FFF;
}
</style>
<head class="b">Login</head>
<body background="bizhi.jpg">
  <?php
    if (!@$_COOKIE["mycookie_name"]) {
      ?>

  <form  action="login.php" method="post">
   
   <table>

   <tr>
    <td>Username : </td>
    <td><input type="text" name="name"/>  </td>
   </tr>


    <tr>
   <td> Password : </td>
   <td><input type="password" name="password"/> </td>
   </tr>
   

    <tr>
   <td></td>
   <td><input type="submit" name="denglu" value="登录"/> </td>
   </tr>
   </br>
   </table>
  </form>

 
 <head class="b">Register</head>
  <form  action="register.php" method="post">
  <table>
  <tr>

   <td> Username :</td>
   <td> <input type="text" name="name"/> </td> 
   </tr>


    <tr>
    <td>Password :</td>
    <td> <input type="password" name="password"/></td>
    </tr>
    
   <tr>
   <td></td>
   <td><input  type="submit" name="zhuce" value="注册"/> </td>
   </tr>
    </table>
  </form>
 

  <?php } 
  else { ?>
  <a href="logout.php">logout</a>
<?php }
 ?>


  <style type="text/css">
  form{
  	margin:50px;
  }

   input{
   	padding-left:20px;
    height: 30px;
    width: 100px;
  }
    html{font-size:20px;}    
    span{color: #666666;}
   </style>
</body>
</html>




























































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































