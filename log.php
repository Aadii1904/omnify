<?php
	
		$connect=new mysqli('localhost','root','','omnify');
		
		if($connect->connect_error){
			die("Connection Error to Database");
		}
		else{
			
			$username=$_POST["username"];
			$password=$_POST["password"];
			
			$usernamesql="SELECT name FROM user WHERE username='$username'";
			
			$result1 = $connect -> query($usernamesql);
			
			if($result1 -> num_rows>0){
				$loginsql="SELECT name FROM user WHERE username='$username' and password='$password' ";
				
				$result2 = $connect -> query($loginsql);
				
				if($result2 -> num_rows>0){
					while($row = $result2 -> fetch_assoc()){
						echo"Username :" .$username;
						echo"<br> Name:" .$row["name"];
?>
						<html>
						<div>
						<form action="Login.html">

							<input type="submit" value="Log Out">
								
						</form>

						<form action="Update.html" method="post" >
							
							<input type="<?php  $username ?>" name="username">
							<input type="submit" value="Update Details">
								
						</form>

						</div>

						</html>
<?php
					}
				}else{
					echo "Incorrect Password";
				}
			}
			else{
				echo "Invalid Username";
			}
			
		}
			


?>