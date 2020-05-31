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
				color: #ddd;
				
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
							<h1 style="margin: 30px;">Semester 01</h1>
						</center>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">C Programming</h2>
							<center><img src="img/c.jpg" class="responsive" alt="C Programming" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-12">
						<center>
							<p>CCP Theory Questions and Answers</p><a href="DOCS/SEM 01/C/CCP Theory Questions and Answers.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Object Orianted Programming</h2>
							<center><img src="img/oops.jpg" class="responsive" alt="Object Orianted Programming" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>C++ Notes Hand Written</p><a href="DOCS/SEM 01/C++/oops hand wriiten.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Complete C++ Notes</p><a href="DOCS/SEM 01/C++/c++ notes.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>OOPS Using Techmax</p><a href="DOCS/SEM 01/C++/oops techmax.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>OOPS With C++ </p><a href="DOCS/SEM 01/C++/oops with c++.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							

							<p>OOPS Using C++</p><a href="DOCS/SEM 01/C++/oops using c++.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">English Communication</h2>
							<center><img src="img/ec.jpg" class="responsive" alt="English Communication" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Introduction</p><a href="DOCS/SEM 01/EC/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2 : Verbal Communication</p><a href="DOCS/SEM 01/EC/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Reading and Writing Skills</p><a href="DOCS/SEM 01/EC/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Developing Reports and Proposals</p><a href="DOCS/SEM 01/EC/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Solving the Problem</p><a href="DOCS/SEM 01/EC/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Working in Groups and Teams</p><a href="DOCS/SEM 01/EC/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Thinking Critically</p><a href="DOCS/SEM 01/EC/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Presenting yourself Professionally</p><a href="DOCS/SEM 01/EC/unit 8.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<center>
							<h2 style="margin: 30px;">Mathematics</h2>
							<center><img src="img/maths.jpg" class="responsive" alt="Mathematics" width="300px;" height="300px;"></center>
						</center>
					</div>
				</div>
				<div class="row" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="col-md-4">
						<center>
							<p>Unit 1: Set Theory And Number Systems</p><a href="DOCS/SEM 01/MATHS/unit 1.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 2: Mathematical Induction And Mathematical Logic</p><a href="DOCS/SEM 01/MATHS/unit 2.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 3: Exponents, Surds and Logarithms</p><a href="DOCS/SEM 01/MATHS/unit 3.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>
						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 4: Permutations and Combinations</p><a href="DOCS/SEM 01/MATHS/unit 4.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 5: Relations and Functions</p><a href="DOCS/SEM 01/MATHS/unit 5.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 6: Vectors, Matrices and Determinants</p><a href="DOCS/SEM 01/MATHS/unit 6.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

						</center>
					</div>
					<div class="col-md-4">
						<center>
							<p>Unit 7: Linear Equations, Polynomials and Introduction<br> to Graph theory</p><a href="DOCS/SEM 01/MATHS/unit 7.pdf" target="_blank" rel="noopener noreferrer">
								<button class="btn btn-primary btn-block bnn" type="button">Download</button>
							</a>

							<p>Unit 8: Mensuration</p><a href="DOCS/SEM 01/MATHS/unit 8.pdf" target="_blank" rel="noopener noreferrer">
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
