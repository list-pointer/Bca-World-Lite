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
	<title>Ask Question Bca World</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<style>
		input[type="text"] {
			display: block;
			padding: 10px 48px 10px 10px;
			box-sizing: border-box;
			font-size: 16px;
			width:90%;
			box-shadow: 0px 0px 20px rgba(51, 51, 51, 0.5);
			border: 1px solid;
		}

	</style>
</head>

<body>
	<?php 	include('header.php');?>
	<center>
	<div class="container">
			<div class="row" style="margin-top: 50px;margin-bottom:50px;">
				<div class="col-md-12">
					<center>
							<h2 style="margin-top: 50px;margin-bottom:50px;">Ask What You want To Ask !</h2>
						<form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
							<input name="question" type="text" title="Your Question..." placeholder="Ask Your question...." id="question">
							<button class="btn btn-primary btn-block" type="submit" name="submit" style="margin-top: 50px;margin-bottom:50px;width:40%">Submit Question</button>
						</form>
					</center>
				</div>
		</div>
	</div>
	<div id="ask-ta">
		<h1>Thank You.<br>Stay tunned for updates.</h1>
	</div>
	</center>
	<?php
        
            if( isset( $_POST["submit"] ) )
            {$name=$_SESSION["name"];
                $question =  $_POST["question"] ;
                $question = addslashes($question);
                $q = "SELECT * FROM quans WHERE question = '$question'";
                 $result = mysqli_query($db,$q);
                if(mysqli_error($db))
					
				{
                    echo "<script>window.alert('Some Error Occured. Try Again or Contact Us.');</script>";
                }
                else if( mysqli_num_rows($result) == 0 ){
                    $query = "INSERT INTO quans (question,askedby,date) VALUES('$question','$name', NOW())";
                    if(mysqli_query( $db, $query)){
                        echo "<style>#sf{display: none;} #ask-ta{display:block;}</style>";
                    }
                    else{
                        echo "<script>window.alert('Something went wrong. Try Again or Contact Us.');</script>";
                    }
                }
                else{
                    echo "<script>window.alert('Question was already Asked.');</script>";
                }
                
                mysqli_close($db);
			}
        ?>
	<?php 	include('footer.php');?>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
