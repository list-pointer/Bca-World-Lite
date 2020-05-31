<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email-admin']))
        header("location: check-admin.php");

                 	$limit = 10;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result1 = $db->query("SELECT count(id) AS id FROM quans");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );
	$Previous = $page - 1;
	$Next = $page + 1;

          
$Sqq = "SELECT * FROM quans ORDER BY id DESC LIMIT $start, $limit";
$re = mysqli_query($db, $Sqq);
$total = mysqli_num_rows($re);
?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	</head>

	<body>
		<div class="row">
			<div class="col l12 s12 red">
				<h4 class="center white-text">Questions</h4>
			</div>
		</div>
		<?php if ($total !=0) {
	
	?>

<table class="striped">
	<tr>
		<td><b>ID</b></td>
		<td><b>Question</b></td>
		<td><b>Answer</b></td>
		<td><b>Asked By</b></td>
		<td><b>Answered By</b></td>
		<td><b>Delete Question</b></td>
	</tr>

	<?php

		while ($row = mysqli_fetch_assoc($re)) {
			echo "<tr>

					<td>".$row['id']."</td>
					<td>".$row['question']."</td>
					<td>".$row['answer']."</td>
					<td>".$row['askedby']."</td>
					<td>".$row['answeredby']."</td>
			      <td><a href='deletequestion.php?id=$row[id]&fn=$row[question]&co=$row[answer]&em=$row[askedby]&pa=$row[answeredby]&da=$row[date]' class='btn btn-small red' onclick='return delet()'>Delete </a></td>		
				  </tr>";
		}
}
?>
		
		<script type="text/javascript">
			function delet() {
				return confirm("Are you sure you want to delete this record");
			}
		</script>
		<script src="js/materialize.min.js"></script>
</table>
	<div class="row" style="margin-top: 50px;margin-left: 10%;">
				<div class="col-md-12">
					<ul class="pagination">
						<li>
							<a href="viewservice.php?page=<?= $Previous; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo; Previous</span>
							</a>
						</li>
						<?php for($i = 1; $i<= $pages; $i++) : ?>
						<li><a href="viewservice.php?page=<?= $i; ?>"><?= $i; ?></a></li>
						<?php endfor; ?>
						<li>
							<a href="viewservice.php?page=<?= $Next; ?>" aria-label="Next">
								<span aria-hidden="true">Next &raquo;</span>
							</a>
						</li>
					</ul></div></div>
</body>

</html>
