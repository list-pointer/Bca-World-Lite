<?php
session_start();
if( isset($_SESSION['user'])){
        header("Location:index.php");
    }
    include('dbh.php');
if(isset($_POST['login_btn']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
if(  $email !='' and $password !='' )
{
	$password=md5($password);
	$check = mysqli_query($db,"SELECT * FROM register_user where email = '$email' and password = '$password' and activated ='1'"); 
	if(mysqli_num_rows($check)>=1)
	{
		$rs = mysqli_fetch_array($check);

		$_SESSION['user'] = $rs['id'];
		
		$_SESSION['name'] = $rs['name'];
		
		$_SESSION['email'] = $rs['email'];
		
		$_SESSION['date'] = $rs['date'];

		header("Location:index.php");
	}
	else{
			echo "<script>window.alert('Something Went Wrong. Please Try Again .');</script>";
}
}
 mysqli_close($db);

}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>LOGIN</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php 	include('header.php');?>
	<div class="login-card"><img class="profile-img-card" src="img/avatar_2x.png">
		<p class="profile-name-card"> </p>
		<center>
			<p>Login Here !</p>
		</center>
		<form class="form-signin" method="post">
			<span class="reauth-email"> </span>
			<input class="form-control" type="email" id="inputEmail" required="" placeholder="Email address" autofocus="" name="email">
			<input class="form-control" type="password" id="inputPassword" required="" placeholder="Password" name="password">
			<div><small class="form-text text-danger">Minimum Length of password is 8 characters.</small></div>
			<button class="btn btn-primary btn-block" type="submit" name="login_btn" style="margin-top:20px;">Sign In</button>
		</form>
		<a class="forgot-password" style="margin-left: 100px;" href="#">Forgot your password?</a>
		<a href="signup.php" class="forgot-password" style="margin-left: 90px;">New User?Register Here</a>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<?php   include('footer.php');?>
</body>

</html>
