<?php
session_start();
 
//connect to database
$db=mysqli_connect('localhost','root','usbw','authentication');
 
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Stocks</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>

<meta charset="utf-8">
<!-- Start TC2000 widget -->
<iframe width="100%" noresize="noresize" scrolling="no" height="20" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=75175"></iframe>
<!-- END TC2000 Widget -->
</head>
<body>
 <div class="header">
    
     <h2 style="color:#FFF" align="center" >Welcome to STOCK EXCHANGE </h2>
     
   <h3 class="" align="center" onDblClick=" 1" style="color:#FFF" title="gggggg">
    <button >
    <a href="login.php"  style="color:#F00"   > Log In   </a> 
     </button>  </h3>
     <h3 class="" align="center" onDblClick=" 1" style="color:#FFF" 	text-decoration:none;>
    <button >
    <a href="register.php"  style="color: #F00"  > Register   </a> 
     </button>  </h3>
   

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
 </div>
 
 
 
 
 <div id="clockDisplay" class="clockStyle"></div>
<script>
function renderTime() {
	var currentTime = new Date();
	var diem = "AM";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	setTimeout('renderTime()',1000);
    if (h == 0) {
		h = 12;
	} else if (h > 12) { 
		h = h - 12;
		diem="PM";
	}
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	}
	if (s < 10) {
		s = "0" + s;
	}
    var myClock = document.getElementById('clockDisplay');
	myClock.textContent = h + ":" + m + ":" + s + " " + diem;
	myClock.innerText = h + ":" + m + ":" + s + " " + diem;
}
renderTime();
</script>
 

 


</body>
</html>
