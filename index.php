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
	<center>
		<div class="container">
			<div class="row" style="margin-top: 50px;margin-bottom:50px;">
				<div class="col-md-12">

					<?php                   
                 $nul=0;  

                 	$limit = 10;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result1 = $db->query("SELECT count(id) AS id FROM quans");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );
	$Previous = $page - 1;
	$Next = $page + 1;

                ?>

					<?php
                            $qu = "select q.id, q.question, q.answer, q.askedby, q.answeredby from quans as q ORDER BY id DESC LIMIT $start, $limit";
                            $re = mysqli_query($db,$qu);
                            while($da = mysqli_fetch_assoc($re)){
                        ?>
					<div id="qa-block">
						<div class="question">
							<div id="Q">Q.</div>

							<?php echo $da['question']."<small id='sml'>Asked By: @".$da['askedby']."</small>"; ?>
						</div>
						<div class="answer">
							<?php 
                                    if($da["answer"]){
                                        $nul=0;
                                        echo "<b>Answer : </b>";
                                        echo $da["answer"]."<br><small float: right;>Answered By: @".$da['answeredby']."</small>";
                                    }
                                    else{
                                        $nul=1;
                                        echo "<em>*** Not Answered Yet ***</em>";
                                    }
                                ?>

							<br><br>
							<?php $qid=$da['id']; 
							
						echo	'<label style="margin-bottom: -25px;"><a href="answer.php?&qid='.$qid.'"><u>Submit your answer</u></a></label>' ?>
							<br>

						</div>
					</div>
					<?php      
                }
                ?>

				</div>
<div class="row" style="margin-top: 50px;margin-left: 10%;">
				<div class="col-md-12">
					<ul class="pagination">
						<li>
							<a href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo; Previous</span>
							</a>
						</li>
						<?php for($i = 1; $i<= $pages; $i++) : ?>
						<li><a href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
						<?php endfor; ?>
						<li>
							<a href="index.php?page=<?= $Next; ?>" aria-label="Next">
								<span aria-hidden="true">Next &raquo;</span>
							</a>
						</li>
					</ul></div></div></div></div></center>


	<?php 	include('footer.php');?>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/materialize.min.js"></script>
</body>
</html>

