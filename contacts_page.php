<!DOCTYPE html>
<?php
  require_once('./config/init.php');
  include_once('./templates/header.php');

?>
<html>
<head>
    <title> GYM NAME </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
       <body>
		<div class="login">
			<h1>Contact</h1>
			<form action="action_regists.php" method="post">
				<label for="Name">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Name" placeholder="Name" id="Name" required>
				<label for="EMAIL">
					<i class="fas fa-lock"></i>
				</label>
				<input type="email" name="EMAIL" placeholder="Email" id="EMAIL" required>
        <label for="PHONE">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="PHONE" placeholder="Phone Number" id="PHONE" required>
        <textarea type="text" class="text" name="mes" placeholder="Your message" id="mes" required></textarea>
				<input type="submit" value="Send">
			</form>
		</div>
	</body>

</body>
</html>