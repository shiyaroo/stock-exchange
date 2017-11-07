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
    <h1 align="left" style="color:#FFF">&nbsp&nbsp&nbspStocks</h1>
     <h4 style="color:#FFF" >Welcome <?php echo $_SESSION['username']; ?></h4>
     
   <h3 class="" align="right" onDblClick=" 1" style="color:#FFF" 	text-decoration:none;>
    <button >
    <a href="logout.php"  style="color:#000"  > Log Out &nbsp&nbsp&nbsp&nbsp  </a> 
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
 
 
<form action="form" method="get"  style="float:left"><table   border="1"  width="100%"  >
  <tr>
    <th  bgcolor="#CCCCCC">Stock Prices </th>
  </tr></table>


<table   border="1"  width="100%">
  <tr >
    <th bgcolor="#CCCCCC" >Company</th>
    <th bgcolor="#CCCCCC" >Value</th>
    <th bgcolor="#CCCCCC" >Actions</th>
  </tr>
  <tr>
    <td>FPA</td>
    <td >10.54</td>
    
    <td bgcolor="#CCCCCC"  >
    
    <a href="form_process.php" style="  background:bottom center #FF0000 "   > Buy </a> 
  </td><tr>
    <td >DL24</td>
    <td>5.12</td>
    <td bgcolor="#CCCCCC" ><a href="form_process.php" style=" background:bottom center #FF0000 "  > Buy </a></td>
  </tr>
  <tr>
    <td > FPL</td>
    <td >45.28</td>
    <td bgcolor="#CCCCCC" ><a href="form_process.php" style=" background:bottom center #FF0000 "  > Buy </a></td>
  </tr>
  <tr>
    <td >FPC</td>
    <td >0.14</td>
    <td bgcolor="#CCCCCC"><a href="form_process.php" style=" background:bottom center #FF0000 "  > Buy </a></td>
  </tr>

</table>


<tr>
  <th>&nbsp&nbsp&nbsp&nbsp</th>
  </tr>

<table    border="1"  width="100%">
  <tr>
    <th  ><!-- Start TC2000 widget -->
<iframe width="400" noresize="noresize" scrolling="no" height="300" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=75174"></iframe>
<!-- END TC2000 Widget -->
 </th>
  </tr></table>
  </form>
  
  
  
  
 
<form action="form" method="get"><table   border="1"  width="100%" >
  <tr>
    <th bgcolor="#CCCCCC" >My Wallet </th>
  </tr>
</table>




<table   border="1"  width="100%">
  <tr >
    <th bgcolor="#CCCCCC" >Company</th>
    <th bgcolor="#CCCCCC">Unite Price</th>
    <th bgcolor="#CCCCCC">Amount</th>
    <th  bgcolor="#CCCCCC">Value</th>
    <th  bgcolor="#CCCCCC">Actions</th>
  </tr>
  <tr>
    <td >FPA</td>
    <td >10.54</td>
    <td >100</td>
    <td >1054</td>
    <td bgcolor="#CCCCCC" ><a href="form_process.php" style=" background:bottom center #FF0000 "  > Sell </a></td>
  </tr>
  <tr>
    <td >DL24</td>
    <td>5.12</td>
    <td >10</td>
    <td>51.2</td>
    <td bgcolor="#CCCCCC"><a href="form_process.php" style=" background:bottom center #FF0000 "  > Sell </a></td>
  </tr>
  <tr>
    <td >FPL</td>
    <td >45.28</td>
    <td>100</td>
    <td>4528</td>
    <td bgcolor="#CCCCCC"><a href="form_process.php" style=" background:bottom center #FF0000 "  > Sell </a></td>
  </tr>
  <tr>
    <td >FPC</td>
    <td >0.14</td>
    <td>20</td>
    <td >2.8</td>
    <td bgcolor="#CCCCCC"><a href="form_process.php" style=" background:bottom center #FF0000 "  > Sell </a></a></td>
  </tr></table>

  <tr>
    <th >  </th>
  </tr>
  <tr>
  <table width="100%" border="1" >
    <th  bgcolor="#CCCCCC">Available Amount : 1500 PLN</th>
  </tr>
</table>
<table    border="1"  width="100%">
  <tr>
    <th  ><!-- Start TC2000 widget -->
<iframe width="320" noresize="noresize" scrolling="no" height="300" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=75177"></iframe>
<!-- END TC2000 Widget -->

 </th>
  </tr></table>
</form>

</body>
</html>
