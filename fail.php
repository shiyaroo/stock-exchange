<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2>Transformation Failure</h2>
	</div>

	<div>
		<?php 
			if(isset($_POST['status'])){
				if($_POST['status']=="failure"){
					echo "<p>Transformation Failed.<br>Details Are Below.</p>";
					echo "<p>Failure Reason: ".$_POST['unmappedstatus']."</p>";
					echo "<p>Amount: ".$_POST['amount']."</p>";
					echo "<p>Name: ".$_POST['username']."</p>";
					echo "<p>Email: ".$_POST['email']."</p>";
					echo "<p>Company name: ".$_POST['company']."</p>";
					
				}
			}

			?>
	</div>
</body>
</html>