<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2>Transformation Success</h2>
	</div>

	<div>
		<?php 
			if(isset($_POST['status'])){
				if($_POST['status']=="success"){
					echo "<p>Transformation Done Successfully.<br>Details Are Below.</p>";
					echo "<p>Amount: ".$_POST['amount']."</p>";
					echo "<p>Name: ".$_POST['username']."</p>";
					echo "<p>Email: ".$_POST['email']."</p>";
					
					echo "<p>Company name: ".$_POST['company']."</p>";
					echo "<p>buy: ".$_POST['buy']."</p>";
					echo "<p>sell: ".$_POST['sell']."</p>";
					echo "<p>availabl amount: ".$_POST['availablamount']."</p>";
				}
				
			}

			?>
	</div>
</body>
</html>