<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>

</head>
<style>
*{
	margin: 0px auto;
	padding: 0px;
}
#wrapper{
	width: 500px;
}
h1 {
	margin-bottom: 20px;
}
label {
	display: block;
	line-height: 40px;
	vertical-align: top;
}
#add_submit, #skip, form {
	display: inline-block;
}

#add_submit, #skip_submit {
	margin-top: 20px;
}
#add_submit {
	margin-left: 80px;
}
#skip_submit {
	margin-left: -100px;
}
textarea {
	width: 300px;
	padding-bottom: 200px;s
}
.danger {
	color: red;
	display: block;
}
</style>

<body>
<?php if(isset($_SESSION['errors']))
	  {
		foreach($_SESSION['errors'] AS $error)
		{
?>
			<span class="danger"><?= $error ?></span>
<?php 	}
		unset($_SESSION['errors']);
	  }
?>
	<div id = "wrapper">
		<h1>Welcome to QuotingDojo</h1>
		<form id="add" action="process.php" method="post">
			<input type="hidden" name="action" value="add">
			<label>Your name: <input type="text" name="name"></label>
			<label>Your quote:  <textarea name="quote"></textarea></label>
			<input id="add_submit" type="submit" value="Add my quote!">
		</form>
		<form id ="skip" action="process.php" method="post">
			<input type="hidden" name="action" value="skip">
			<input id="skip_submit" type="submit" value="Skip to quotes!">
		</form>
	</div>
</body>
</html>