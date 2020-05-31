<div>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
		<div class="container">
			<h3 class="col l2 offset-50"><a href="index.php"><img src="img/logo-big.png" style="margin-top:5px; width:165px"> </a></h3><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav mr-auto" style="margin-top:-5px;">
					<li class="nav-item" role="presentation"><a class="nav-link" href="ask.php">Ask A Question</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">About Us</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">Contact Us</a></li>
					<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Documentation</a>
						<div class="dropdown-menu" role="menu">
							<a class="dropdown-item" role="presentation" href="syllabus.php">Syllabus P131</a>
							<a class="dropdown-item" role="presentation" href="sem1.php">Semester 01</a>
							<a class="dropdown-item" role="presentation" href="sem2.php">Semester 02</a>
							<a class="dropdown-item" role="presentation" href="sem3.php">Semester 03</a>
							<a class="dropdown-item" role="presentation" href="sem4.php">Semester 04</a>
							<a class="dropdown-item" role="presentation" href="sem5.php">Semester 05</a>
							<a class="dropdown-item" role="presentation" href="sem6.php">Semester 06</a></div>
					</li>
				</ul>
				<?php

                if (!isset($_SESSION['user'])) {
                  ?>
				<span class="navbar-text actions">
					<a class="login" href="login.php">Log In</a>
					<a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a>
				</span>
				<?php
                } else {
                  ?>
				<span class="navbar-text actions">
					<a class="btn btn-light action-button" role="button" href="logout.php">Logout</a>
				</span>
				<?php
                }
                ?>
			</div>
		</div>
	</nav>
</div>
