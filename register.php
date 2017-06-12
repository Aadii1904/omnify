<?php
	
	$connect= new mysqli('localhost', 'root', '', 'omnify');
	
	if($connect->connect_error){
		die("connection failed");
	}
	else{
		$name=$_POST["name"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		$insertsql = "INSERT into user VALUES('$name','$username','$password')";
		
		$result = $connect -> query($insertsql);
		
		if($result){
			echo "User Successfully Registered <br> " ;
		}else
		
		echo "username already exist <br> ";

	}
?>

<html>
	<div>
		<form action="index.html">
			<input type="submit" value="home">
		</form>
	</div>
<html>