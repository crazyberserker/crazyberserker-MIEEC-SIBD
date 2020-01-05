
<!DOCTYPE html>
<?php
  include ('templates/header_user.php');
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
			<h1>Change password</h1>
			<form method="post" action="action_pass_change.php">
				<label for="old_password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="old_password" placeholder="Old Password" id="old_password" required>
        <label for="new_password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="new_password" placeholder="New Password" id="new_password" required>
				<input type="submit" value="Change Password">
			</form>
		</div>
	</body>
</body>
</html>