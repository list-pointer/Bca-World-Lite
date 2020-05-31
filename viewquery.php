<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email-admin']))
        header("location: check-admin.php");

                 	$limit = 10;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result1 = $db->query("SELECT count(id) AS id FROM user_query");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );
	$Previous = $page - 1;
	$Next = $page + 1;

          
$Sqq = "SELECT * FROM user_query ORDER BY id DESC LIMIT $start, $limit";
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
		<h4 class="center white-text">User Quries</h4>
	</div>
</div>
		<?php if($total !=0) {
	
	?>

	<table class="striped">
		<tr>
			<td><b>Id</b></td>
			<td><b>Name</b></td>
			<td><b>Email</b></td>
			<td><b>Subject</b></td>
			<td><b>Phone Number</b></td>
			<td><b>Message</b></td>
			<td><b>Date</b></td>
			<td><b>Status</b></td>
			<td><b>Delete Query</b></td>
			<td><b>Query Resolved</b></td>
			<td><b>query Un-Resolved</b></td>
		</tr>
	
		<?php

		while ($row = mysqli_fetch_assoc($re)) {
			echo "<tr>

					<td>".$row['id']."</td>
					<td>".$row['name']."</td>
					<td>".$row['email']."</td>
					<td>".$row['subject']."</td>
					<td>".$row['phoneno']."</td>
					<td>".$row['message']."</td>
					<td>".$row['date']."</td>
					<td>".$row['resolved']."</td>	
					<td><a href='deletequery.php?&id=$row[id]&fn=$row[name]&em=$row[email]&su=$row[subject]&co=$row[phoneno]&ms=$row[message]&da=$row[date]' class='btn btn-small red' onclick='return delet()'>Delete</a></td>	

					<td><a href='resolvequery.php?id=$row[id]&rs=$row[resolved]' class='btn btn-small green' onclick='return resolve()'>Resolved</a></td>

			      <td><a href='unresolvequery.php?id=$row[id]&rs=$row[resolved]' class='btn btn-small blue' onclick='return unresolve()'>Un-Resolved</a></td>			
			      </tr>";
		}

}
?>
<script type="text/javascript">
	function delet()
	{
		return confirm("Are you sure you want to delete this record");
	}

	function resolve()
	{
		return confirm("Are you sure this query is resolved");
	}

	function unresolve()
	{
		return confirm("Are you sure this query is not resolved");
	}
</script>
<script src="js/materialize.min.js"></script>
</table>


	<div class="row" style="margin-top: 50px;margin-left: 10%;">
				<div class="col-md-12">
					<ul class="pagination">
						<li>
							<a href="viewquery.php?page=<?= $Previous; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo; Previous</span>
							</a>
						</li>
						<?php for($i = 1; $i<= $pages; $i++) : ?>
						<li><a href="viewquery.php?page=<?= $i; ?>"><?= $i; ?></a></li>
						<?php endfor; ?>
						<li>
							<a href="viewquery.php?page=<?= $Next; ?>" aria-label="Next">
								<span aria-hidden="true">Next &raquo;</span>
							</a>
						</li>
					</ul></div></div>

</body>
</html>
