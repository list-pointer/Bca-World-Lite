	<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>HOME</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<body>
		<?php 	include('header.php');?>
		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">P131 Bca Syllabus</h2>
							<center><img src="img/syllabus.jpg" class="responsive" alt="" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>First Year Syllabus</p><a href="DOCS/SYLLABUS/FY SYLLABUS.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block" style="margin:10px;width: 40%;" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Second Year Syllabus</p><a href="DOCS/SYLLABUS/SY SYLLABUS.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block" style="margin:10px;width: 40%;" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Third Year Syllabus</p><a href="DOCS/SYLLABUS/TY SYLLABUS.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block" style="margin:10px;width: 40%;" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>
			</div>
		</div>

		<?php 	include('footer.php');?>
		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>

	</html>
