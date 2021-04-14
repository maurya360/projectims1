<?php 
session_start();
if(isset['email'])

session_unset();
session_destroy();




header("Location:../index.php");
?>