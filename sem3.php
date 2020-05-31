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
							<h1 style="margin: 30px;">Semester 03</h1>
						</center>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Web Technologies</h2>
							<center><img src="img/wt.jpg" class="responsive" alt="Web Technologies" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-12">
						<center>
							<p>Web Technologies Notes</p><a href="DOCS/SEM 03/WT/wt notes.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="col-md-12">
					<center>
						<h2 style="margin: 30px;">Database Management System</h2>
						<center><img src="img/dbms.jpg" class="responsive" alt="Database Management System" width="300px;" height="300px;"></center>
					</center>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Data files and DBMS</p><a href="DOCS/SEM 03/DBMS/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Introduction to DBMS</p><a href="DOCS/SEM 03/DBMS/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 3: Relational data models and relational algebra</p><a href="DOCS/SEM 03/DBMS/UNIT 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 4: Entity Relationship</p><a href="DOCS/SEM 03/DBMS/UNIT 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
				</div>

				<div class="col-md-12">
					<center>
						<h2 style="margin: 30px;">Operating Systems</h2>
						<center><img src="img/os.jpg" class="responsive" alt="Operating Systems" width="300px;" height="300px;"></center>
					</center>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: History of The Operating Systems</p><a href="DOCS/SEM 03/OS/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Operating System –Functions And Structure</p><a href="DOCS/SEM 03/OS/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 6: I/O Management And Deadlock</p><a href="DOCS/SEM 03/OS/UNIT 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 7: Memory Management</p><a href="DOCS/SEM 03/OS/UNIT 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 8: Protection and Security</p><a href="DOCS/SEM 03/OS/UNIT 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="col-md-12">
					<center>
						<h2 style="margin: 30px;">Information and Technology</h2>
						<center><img src="img/it.jpg" class="responsive" alt="Information and Technology" width="300px;" height="300px;"></center>
					</center>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Learning Skills</p><a href="DOCS/SEM 03/IT/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : 21st century Learning environment</p><a href="DOCS/SEM 03/IT/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Productivity tools Part I</p><a href="DOCS/SEM 03/IT/UNIT 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Productivity tools Part II</p><a href="DOCS/SEM 03/IT/UNIT 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: E Learning Skills</p><a href="DOCS/SEM 03/IT/UNIT 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: E learning Challenges</p><a href="DOCS/SEM 03/IT/UNIT 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Securityh</p><a href="DOCS/SEM 03/IT/UNIT 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: List of resources</p><a href="DOCS/SEM 03/IT/UNIT 8.pdf" target="_blank" rel="noopener noreferrer">
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
