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

		<style>
			.bnn {
				margin: 10px;
				width: 40%;
			}

		</style>

	</head>

	<body>
		<?php include('header.php');?>
		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h1 style="margin: 30px;">Semester 05</h1>
						</center>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Advance Java</h2>
							<center><img src="img/java%20advance.jpg" class="responsive" alt="Advance Java" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: JDBC</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Servlet</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: JSP</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Hibernate</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Spring Core</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Spring MVC</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Java Mail</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Java And Json</p><a href="DOCS/SEM 05/ADVANCE JAVA/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">LINUX ADMINSTARTION </h2>
							<center><img src="img/linux.jpg" class="responsive" alt="LINUX ADMINSTARTION " width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Introduction to Linux</p><a href="DOCS/SEM 05/LINUX/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Installation of Redhat Linux</p><a href="DOCS/SEM 05/LINUX/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Using Command Line and Managing Software</p><a href="DOCS/SEM 05/LINUX/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Working with Users, Groups and Permissions</p><a href="DOCS/SEM 05/LINUX/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: TCP/IP Networking and Network File System</p><a href="DOCS/SEM 05/LINUX/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Configuring DNS and DHCP</p><a href="DOCS/SEM 05/LINUX/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Connecting to Microsoft Networks and Setting up a Mail Server</p><a href="DOCS/SEM 05/LINUX/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Securing Server with iptables and Configuring Web Server</p><a href="DOCS/SEM 05/LINUX/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Apptitude</h2>
							<center><img src="img/apptitude.jpg" class="responsive" alt="Apptitude" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Number System-Basics</p><a href="DOCS/SEM 05/APPTITUDE/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Averages and Problems on Ages</p><a href="DOCS/SEM 05/APPTITUDE/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Percentages, Profit and Loss</p><a href="DOCS/SEM 05/APPTITUDE/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Ratio and Proportion</p><a href="DOCS/SEM 05/APPTITUDE/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Interest and Compound Interest</p><a href="DOCS/SEM 05/APPTITUDE/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Time and Work</p><a href="DOCS/SEM 05/APPTITUDE/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Time Speed and Distance</p><a href="DOCS/SEM 05/APPTITUDE/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Permutations and Combinations, Probability</p><a href="DOCS/SEM 05/APPTITUDE/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">ECOMMERCE TECHNOLOGIES</h2>
							<center><img src="img/ecom.jpg" class="responsive" alt="ECOMMERCE TECHNOLOGIES" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Introduction </p><a href="DOCS/SEM 05/ECOMMERCE/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Marketing</p><a href="DOCS/SEM 05/ECOMMERCE/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Security</p><a href="DOCS/SEM 05/ECOMMERCE/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Payment System</p><a href="DOCS/SEM 05/ECOMMERCE/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Customer Relationship Management</p><a href="DOCS/SEM 05/ECOMMERCE/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Supply Chain Management</p><a href="DOCS/SEM 05/ECOMMERCE/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Strategy</p><a href="DOCS/SEM 05/ECOMMERCE/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Mobile Commerce</p><a href="DOCS/SEM 05/ECOMMERCE/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
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
