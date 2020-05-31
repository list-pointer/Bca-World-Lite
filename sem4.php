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
		<?php 	include('header.php');?>
		<div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h1 style="margin: 30px;">Semester 04</h1>
						</center>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Java</h2>
							<center><img src="img/java.jpeg" class="responsive" alt="Java" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-12">
						<center>
							<p>Java 100 Minute's Presentation</p><a href="DOCS/SEM 04/JAVA/java notes.pptx" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Finance And Investment Skills</h2>
							<center><img src="img/finance.jpg" class="responsive" alt="Finance And Investment" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-12">
						<center>
							<p>Finance And Investment Skills Book</p><a href="DOCS/SEM 04/FINANCE/finance notes.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">COMPUTER SYSTEM APPLICATION</h2>
							<center><img src="img/csa.jpg" class="responsive" alt="COMPUTER SYSTEM APPLICATION " width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Motherboard & Its Component Objectives</p><a href="DOCS/SEM 04/CSA/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Storage Devices & Interfacing. Objectives</p><a href="DOCS/SEM 04/CSA/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Display Devices & Interfacing</p><a href="DOCS/SEM 04/CSA/UNIT 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Input and Output Devices </p><a href="DOCS/SEM 04/CSA/UNIT 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Power Supplies</p><a href="DOCS/SEM 04/CSA/UNIT 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Interfaces</p><a href="DOCS/SEM 04/CSA/UNIT 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: PC Troubleshooting, Maintenance and Tools</p><a href="DOCS/SEM 04/CSA/UNIT 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Overview of Parallel Processing and Pipelining Processing</p><a href="DOCS/SEM 04/CSA/UNIT 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">SOFTWARE ENGINEERING </h2>
							<center><img src="img/se.jpg" class="responsive" alt="SOFTWARE ENGINEERING " width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Software Engineering and Models</p><a href="DOCS/SEM 04/SE/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Requirement Analysis</p><a href="DOCS/SEM 04/SE/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Software Design</p><a href="DOCS/SEM 04/SE/UNIT 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Coding, structured programming, programming practices</p><a href="DOCS/SEM 04/SE/UNIT 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Software Testing and Maintenance</p><a href="DOCS/SEM 04/SE/UNIT 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Quality Assurance</p><a href="DOCS/SEM 04/SE/UNIT 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Software Configuration Management</p><a href="DOCS/SEM 04/SE/UNIT 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Latest trends in Software Engineering</p><a href="DOCS/SEM 04/SE/UNIT 8.pdf" target="_blank" rel="noopener noreferrer">
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
