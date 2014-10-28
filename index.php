<?php require("validation.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type"text/css" href="style.css">
<title> praks 6/7 </title>
<style type="text/css">
.form-error{color:red;}
.form-notice{font-style:bold;
				color:green;}

</style>
</head>


<body> 

<pre> <?php print_r($_POST); ?> </pre>
<form action="index.php" method="post">

	<div class="form_field">
<div class="form_message">
	<?php if ($isSubmitted) {
echo $usernameMessage;}

		?>
		</div> 
	
<span>kasutajanimi </span>
<input type="text" name="username">
</div>

	<div class="form_field">
	<input type="submit" name="submit" value="Saada">
</div>
</body>
</html>