<?php
session_start();
include('DBcon.php');
 
if(isset($_POST["submit"])){

   $firstname   = mysql_real_escape_string($_POST["firstname"]);
   $lastname    = mysql_real_escape_string($_POST["lastname"]);
   $username  = mysql_real_escape_string($_POST["username"]);
   $email  = mysql_real_escape_string($_POST["email"]);
   $pass    = mysql_real_escape_string($_POST["pass"]);
   $cpass  = mysql_real_escape_string($_POST["cpass"]);
   
   $_SESSION["tmp"]["email"]=$email;
   $upit = mysql_query("SELECT email FROM users");

   while($row=mysql_fetch_array($upit)){
       $mail = $row["email"];
       if($email == $mail){
            $_SESSION["error"]["email"]="Email in use";
        
         }
   }
   if($pass == $cpass){
       $insert = "INSERT INTO users (firstname,lastname,username,email,password) VALUES ('$firstname','$lastname','$username','$email','$password')";
       $izvrsi = mysql_query($insert);

      
       header("Location: index.php");
   }else{
       $_SESSION["error"]["cpass"]="Lozinke se ne podudaraju";
   }
}
if(isset($_SESSION["error"])){
    header("Location: registration.php");

}

?>
