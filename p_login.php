<?php
session_start();
echo"Name:-". $_POST["uname"];
echo "<br>";
echo "Password:-". $_POST["pword"];

setcookie("c_uname",$_POST["uname"]);
setcookie("c_pword",$_POST["pword"]);

$_SESSION['uname']=$_POST["uname"];
header("location: details.php");

?>