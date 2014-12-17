<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<b id="welcome">Welcome,<i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log out</a></b>
</body>
</html>