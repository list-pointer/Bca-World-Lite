<?php

	session_start();
	include('dbh.php');
if(isset($_POST['onsubmit-form']))
{
 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phoneno = $_POST['phoneno'];
	$message = $_POST['message'];



if( $name !='' and $email !='' and $phoneno !='' and $subject !='' and $message != '' )
{
	$check = mysqli_query($db,"SELECT * FROM user_query where message = '$message'"); 
	if(mysqli_num_rows($check)>=1)
	{
		echo "<script>window.alert('Query Already In Existed.Please Enter A Different Query.');</script>";
	}
	else{
	
	$sql="INSERT INTO user_query(name,phoneno,email,subject,message,date) VALUES('$name','$phoneno','$email','$subject','$message',NOW())";
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

				$mail->setFrom('bcaworld062@gmail.com',$address);
				$mail->addAddress('bcaworld062@gmail.com',$useremail);
				$mail->isHTML(true);
				$mail->Subject = $subject;
				$Message =$message;
				$mail->Body = $Message; 
				$mail->send();
				if ($mail->send()) 
				{
					header("Location:index.php");
				}
			}
			catch(Exception $e)
			{
				echo "<script>window.alert('Incorrect Email Address.Please Enter a Different Email Address.');</script>";
			}
        
    }
    else
    {
    	 echo "<script>window.alert('Something went Wrong .please Try again.');</script>"; 	
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
	<title>CONTACT</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<?php   include('header.php');?>
	<div class="container" id="info-container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-6">
				<center>
					<h2 style="margin-bottom:20px;">A Story About Us</h2>
				</center>
				<p>
					It is said that knowledge comes handy when you forget
					all that you have learned But the biggest road block
					on the way of gaining knowledge are the doubts that are remained unanswered.</p>
				<p>
					I started this website as a 3rd year student of BCA.
					while i was a student i had doubts infact many doubts thankfully I had
					teachers to suppport me and solve my doubts.
				</p>
				<p>
					still i always thought of students who learn using the
					internet everytime they have doubts they had to use internet and search for answers
					it's not only time consuming but sometimes confussing to. </p>
				<p>
					Being a student i understand the hardship of a student's life.
					so the motive of creating The Bca World is to help students with their doubts
					as much as i can.</p>


			</div>
			<div class="col-12 col-sm-6 col-md-6 site-form">
				<div class="col-md-12">
					<center>
						<h2>Tel Us What You Want</h2>
						<form id="my-form" method="post">
							<div class="form-group">
								<input class="form-control" type="text" id="name" name="name" required="" placeholder="Name" autofocus=""></div>
							<div class="form-group">
								<input class="form-control" type="email" id="email" name="email" required="" placeholder="Email"></div>
							<div class="form-group">
								<input class="form-control" type="text" id="email" name="subject" required="" placeholder="Subject"></div>
							<div class="form-group">
								<input class="form-control" type="tel" id="phonenumber" name="phoneno" required="" placeholder="Phone" minlength="10" maxlength="10"></div>
							<div class="form-group">
								<textarea class="form-control" style="border-radius: 0 !important;
	width: 70%;" required="" placeholder="message" name="message" rows="5"></textarea></div>
							<button class="btn btn-primary btn-block" type="submit" name="onsubmit-form" style="margin-top: 20px;width: 70%;">Send Message</button>
						</form>
					</center>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<?php   include('footer.php');?>
</body>

</html>
