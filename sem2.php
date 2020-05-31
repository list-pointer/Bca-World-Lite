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
							<h1 style="margin: 30px;">Semester 02</h1>
						</center>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Data Strucure Using C++</h2>
							<center><img src="img/ds.jpg" class="responsive" alt="Data Strucure Using C++" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Introduction to Data Structure</p><a href="DOCS/SEM 02/DS/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Sorting and Searching</p><a href="DOCS/SEM 02/DS/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Stacks</p><a href="DOCS/SEM 02/DS/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Queues</p><a href="DOCS/SEM 02/DS/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Linked List</p><a href="DOCS/SEM 02/DS/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Trees</p><a href="DOCS/SEM 02/DS/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Graph</p><a href="DOCS/SEM 02/DS/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Hashing</p><a href="DOCS/SEM 02/DS/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Computer Networks</h2>
							<center><img src="img/cn.jpg" class="responsive" alt="" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Introduction to Networks</p><a href="DOCS/SEM 02/CN/CN1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Network Topologies & Networking Devices</p><a href="DOCS/SEM 02/CN/CN2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Transmission Media</p><a href="DOCS/SEM 02/CN/CN3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Network Architecture and Protocols</p><a href="DOCS/SEM 02/CN/CN4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: OSI Reference Model</p><a href="DOCS/SEM 02/CN/CN5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: TCP / IP Suite</p><a href="DOCS/SEM 02/CN/CN6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Computer Security</p><a href="DOCS/SEM 02/CN/CN7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Cryptography & Network Security</p><a href="DOCS/SEM 02/CN/CN8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Statistics</h2>
							<center><img src="img/stats.jpg" class="responsive" alt="" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Classification, Tabulation and Graphical Methods</p><a href="DOCS/SEM 02/STATS/UNIT 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2: Measures of Central Tendency</p><a href="DOCS/SEM 02/STATS/UNIT 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Moments Skewness and Kurtosis</p><a href="DOCS/SEM 02/STATS/UNIT 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Correlation and Regression</p><a href="DOCS/SEM 02/STATS/UNIT 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 6: Probability</p><a href="DOCS/SEM 02/STATS/UNIT 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
				</div>




				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Enviromental Skills</h2>
							<center><img src="img/evs.jpg" class="responsive" alt="" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Enviromental Skills</p><a href="DOCS/SEM 02/EVS/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2: Enviromental Skills</p><a href="DOCS/SEM 02/EVS/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 3: Enviromental Skills</p><a href="DOCS/SEM 02/EVS/unit 3.pps" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 4: Enviromental Skills</p><a href="DOCS/SEM 02/EVS/unit 4.pps" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 5: Enviromental Skills</p><a href="DOCS/SEM 02/EVS/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Enviromental Skills Book</p><a href="DOCS/SEM 02/EVS/evs book.pdf" target="_blank" rel="noopener noreferrer">
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
