

<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","usbw","authentication");
if(isset($_POST['register_btn']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $password=mysql_real_escape_string($_POST['password']);
    $password2=mysql_real_escape_string($_POST['password2']);  
     if($password==$password2)
     {           //Create User
            $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            header("location:home.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
     }
}
?>


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

