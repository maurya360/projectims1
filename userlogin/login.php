<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: index.php?error=email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	 }else if(empty($email) and empty($pass)){
        header("Location: index.php?error=email and Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['pass'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../userpage/index.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect email or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User email or password");
	        exit();
		}
	}
	
}else{
	header("Location: imsproject/index.php");
	exit();
}