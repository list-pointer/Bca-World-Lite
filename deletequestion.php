<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['email-admin']))
        header("location: check-admin.php");
error_reporting(0);
include 'dbh.php';

$id = $_GET['id'];
$fn = $_GET['fn'];
$co = $_GET['co'];
$em = $_GET['em'];
$pa = $_GET['pa'];
$da = $_GET['da'];



$deleteSQl = "DELETE  FROM quans WHERE question='$fn'";
$deletere = mysqli_query($db, $deleteSQl);

if ($deletere) {
	?>
	<META HTTP-EQUIV="Refresh", CONTENT='0, URL=viewservice.php'>
	<?php
}
else
{
	echo "<script>window.alert('Something went Wrong .please Try again.');</script>";
}
?>