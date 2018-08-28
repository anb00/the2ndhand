<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conection.php";
			
			$user_id=null;

			$username = $_POST['username'];
			$password = md5(htmlentities($_POST["password"]));

			$sql1= "select * from user where (username='$username' or email='$username') and password='$password' ";
			
			$query = $con->query($sql1);
			
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;

				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}



?>