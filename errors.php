<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<title>register to stock exchange</title>
 <link rel="stylesheet" style type="text/css" href="style.css" >

</head>

<body>
<div class="header">
<h2>Register Now </h2>

</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register.php">
  <table>
  <tr>
    
  <td>username:</td>
    <td><input type="text" name="username" class="textInput" /></td>
  </tr>
    <td>Email:</td>
    <td><input type="email" name="email" class="textInput" /></td>
  </tr>
  <tr> 
    <td>Password:</td>
    <td><input type="password" name="password"class="textInput" /></td>
  </tr>
  <tr>
    <td>password again:</td>
    <td><input type="password" name="password2" class="textInput" /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" name="register_btn" value="Register" class="Register" /></td>
  </tr>
   
  </table>
</form>
</body>
</html>