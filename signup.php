<?php


	session_start();
     if( isset($_SESSION['user'])){
        header("Location: index.php");
    }
    include('dbh.php');
if(isset($_POST['submit_btn']))
{
 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$password = $_POST['password'];



if( $name !='' and $email !='' and $phoneno !='' and $password !='' )
{
	$check = mysqli_query($db,"SELECT * FROM register_user where email = '$email'"); 
	if(mysqli_num_rows($check)>=1)
	{
		echo "<script>window.alert('Email Address Already In Use.Please Enter A Different Email Address.');</script>";
	}
	else{
		$token = md5($name);
		$password=md5($password);
	$sql="INSERT INTO register_user(name,phoneno,email,password,token,date) VALUES('$name','$phoneno','$email','$password','$token',  NOW())";
	$query=mysqli_query($db,$sql);
	if($query)
	{
		            require_once("vendor/phpMailer/phpMailer/src/Exception.php");
    	require_once("vendor/phpMailer/phpMailer/src/PHPMailer.php");
    	require_once("vendor/phpMailer/phpMailer/src/SMTP.php");

	
		$mail = new phpMailer\phpMailer\PHPMailer();
			try
			{
				$mail->SMTPDebug = 0;
				$mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'bcaworld062@gmail.com';
				$mail->Password = 'Bcaworld8@#';
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;

				$address = $email;
				$useremail = $name;

				$mail->setFrom('bcaworld062@gmail.com','Bca World ');
				$mail->addAddress($address,$useremail);
				$mail->addReplyTo('bcaworld062@gmail.com','Bca World ');

				$mail->isHTML(true);
				$mail->Subject = "WelCome to Bca World. Verification Email for Bca World";
				$mail->Body = '<p>We recieved a Registration request. The link to  verify your account is been sent below. You can ignore this email if you have already verified your account<br>Here is your account verification link:<br><b><a href="http://localhost:8080/bcaworld 1.0/activate.php?token='.$token.'">CLICK HERE FOR VERIFICATION OF ACCOUNT</a></b></p>';
				$mail->send();
				if ($mail->send()) {
					echo "<script>window.alert('Verification Email Has Been Sent On Your Email Address. Please Verify Your Account Before Login.');</script>";
				}
			}
			catch(Exception $e)
			{
				echo "<script>window.alert('Incorrect Email Address.Please Enter a Different Email Address.');</script>";
			}
        
    }
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
	<title>SIGN UP</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php 	include('header.php');?>
	<div class="login-card"><img class="profile-img-card" src="img/avatar_2x.png">
		<p class="profile-name-card"> </p>
		<center>
			<p>Register YourSelf Here !</p>
		</center>
		<form class="form-signin" method="post">
			<span class="reauth-email"></span>
			<input class="form-control" type="text" id="inputEmail" required="" placeholder="Your Name" name="name" autofocus="">
			<input class="form-control" type="email" id="inputEmail" required="" placeholder="Email address" name="email">
			<input class="form-control" type="text" id="inputPassword" required="" placeholder="Phone Number" name="phoneno" minlength="10" maxlength="10">
			<input class="form-control" type="password" id="inputPassword" required="" placeholder="Enter Password" name="password" minlength="8">
			<div><small class="form-text text-danger">Minimum Length of password is 8 characters.</small></div>
			<button class="btn btn-primary btn-block" type="submit" name="submit_btn" style="margin-top: 20px;">Sign Up</button>
		</form><a href="login.php" class="forgot-password" style="margin-left: 80px;">Already a User?Login Here</a>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<?php   include('footer.php');?>
</body>

</html>
