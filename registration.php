<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> </head>
<body>
<title> Registration </title>
<form id="regform">
<fieldset>
<legend> Registration information:</legend>

 
<input type="text" id="firstname" name="firstname" required="required" placeholder="First name"> <br><br>
 
<input type="text" id="lastname" name="lastname"  required="required" placeholder="Last name"> <br><br>

<?php
                       if(isset($_SESSION["error"]["username"])){
                           echo $_SESSION["error"]["username"];
                       } 
                    ?>
 
<input type="text" id="username" name="username"  required="required" placeholder="Username"> <br><br>

<input type="email" id="email" name="email"  required="required" placeholder="E-mail"> <br><br>

<?php
                       if(isset($_SESSION["error"]["pass"])){
                           echo $_SESSION["error"]["pass"];
                       } 
                    ?>
<input type="password" id="pass" name="password" required="required"  placeholder="Password"> <br><br>


<input type="password" id="cpass" name="cpassword" required="required"  placeholder="Confirm password"> <br><br>


<input type="submit" value="Submit" id="submit"></fieldset>
</form>
<?php
if(isset($_SESSION["error"])){
    unset($_SESSION["error"]);
} 
?>

<?php
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'flash-tech');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
?>


</body>
</html>
