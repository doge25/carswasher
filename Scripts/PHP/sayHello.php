<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>иди в жопу</title>
</head>
<body>
	<form>
		<h1>Hello <?php echo $_REQUEST['Name']; ?></h1>
		<?php
			$Password = $_REQUEST['password'];
			$Name = $_REQUEST['Name'];
			if ($Password != '1234')
			{
				echo "error password not succesefull";
			} 
			else
			{
				echo "welcom from asshole";
			}
		?>
	</form>
</body>
</html>