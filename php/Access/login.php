<?php
session_start();

include ('dbconfig/dbConfig.php');

if (isset($_POST['login'])) {
	
	
	$user = mysqli_real_escape_string($link,$_POST['UserName']);
	$pass = mysqli_real_escape_string($link,$_POST['Password']);
	
	
	$result = mysqli_query($link,"SELECT * FROM useraccess WHERE UserName = '$userName' AND Password = '$pass'") 
or die(mysqli_error());  
	 
	if($row = mysqli_fetch_array( $result )) {
		
		header('Refresh: 0; URL=http:store_directory.php');
		
		$_SESSION['name'] = $row['name'];
		
	}
	
}


?>


<!DOCTYPE HTML>
<html>
<head>
<title>AboutMed</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" action="index.php" method="POST">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" tabindex="1" placeholder="Username" required name="user">
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" tabindex="2" placeholder="Password" required name="pass">
	</fieldset>
	<footer>
	  <label>About Med System</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4" name="login">
	</footer>
    
</form>
<footer id="main">
 About Med Systems 
</footer>
</body>
</html>