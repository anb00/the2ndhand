<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conection.php";
			
			$found=false;

			$username = $_POST['username'];
			$email = $_POST['email'];
			$fullname = $_POST['fullname'];
			$password = md5(htmlentities($_POST["password"]));
			

			$sql1= "select * from user where username='$username' or email='$email'";

			$query = $con->query($sql1);
			
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../signupForm.php';</script>";
			}
			$sql = "insert into user(username,fullname,email,password,created_at) value ('$username', '$fullname', '$email','$password',NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>