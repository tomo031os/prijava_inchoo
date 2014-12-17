<?php
include('login.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head><title> LOG IN </title>
<link href="css.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="login">
<form action="" method="post">
<label>Username:</label>
<input type="text" id="name" name="username" placeholder="Username"> <br>
<label>Password:</label>
<input type="password" id="password" name="password" placeholder="Password"> <br>
<input type="submit" name="submit"  value=" Log in ">
</div>
<?php echo $error; ?>
</form>
</body>
</html>