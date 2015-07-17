<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>

	<style>
		*
		{
			margin: 0px auto;
			padding: 0px;
			font-family: sans-serif;
		}
		#wrapper 
		{
			width: 900px;
		}
		.quote, .name
		{
			line-height: 25px;
		}
		.name 
		{
			padding-left: 100px;
			border-bottom: 1px solid;
			padding-bottom: 15px;
		}
		.quote 
		{
			margin-top: 15px;
		}
		form {
			margin-top: 20px;
			display: inline-block;
		}
		#submit_goback, #submit_delete {
			background-color: black;
			color: white;
			padding: 6px;
			font-size: 14px;
		}
		#submit_goback{
			margin-right: 740px;
		}

	</style>
</head>
<body>
	<div id = "wrapper">
		<h1>Here are the awesome quotes!</h1>

<?php	for($i=count($_SESSION['entered_quote'])-1; $i>=0; $i--)
		{?>
			<p class="quote">"<?= $_SESSION['entered_quote'][$i]['quote']?>"</p>
			<p class="name">- <?= $_SESSION['entered_quote'][$i]['name']?> at <?= $_SESSION['entered_quote'][$i]['created_at']?> </p> 
 <?php	}?>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="goback">
			<input id="submit_goback" type="submit" value="Go Back">
		</form>
	</div>
</body>
</html>