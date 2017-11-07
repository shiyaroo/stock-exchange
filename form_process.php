<!DOCTYPE html>
<html>
<head>


</head>
<body>

	<div>
		<h1 align="center">Buy And Sell The Stocks</h1>
		<h3 align="center">Fill the form and submit it for starting the transaction...</h3>
	</div>
 
<div   style=" background:#333" align="center">
<table>
	<form name="postForm" action="form_process.php" method="POST"   >
	
	<tr><td style=" color:#FFF">Amount</td><td width="144"><input type="text" name="amount" value="" /></td></tr>
	<tr><td style=" color:#FFF">UserName</td><td><input type="text" name="firstname" value="" /></td></tr>
	<tr><td style=" color:#FFF">Email</td><td><input type="text" name="email" value="" /></td></tr>
	
	<tr>
	  <td style=" color:#FFF">ChooseCompany</td><td><select name="select">
	    <option>FPA</option><option>DL24</option><option>FPL</option><option>FPC</option>
	      </select>	    </td></tr>
	
	<tr><td>
    <input type="submit" value="Buy"   border="5px"  align="bottom" /></td><td>
    
    <input type="submit"  value="Sell" border="5px"  align="bottom"   /></td>
    
    <td ><a href="home.php" style=" background: #CCC bottom fixed  "  > Cancel  </a></td></tr>
	
    </form>
</table>
 
</div>
</body>
</html>