<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
if(username == "wanda" && $password == 123){
	 $_SESSION["username"] = $username;

	 header("Location:list.php");

}else{
	header("Location: login.php");
}
?>