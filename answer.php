<?php
  session_start();
    include('dbh.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");

    $qid=$_REQUEST['qid'];
if(empty($qid))
{

    header("location: index.php");
}
if(isset($_POST["ansubmit"]))
    {       
        $answer = $_POST["answer"];
        if($answer == NULL)
        {
            echo "<script>window.alert('Please Enter something.');</script>";
        }
        else
        {
$query1 = "UPDATE quans set answer='".$_POST["answer"]."', answeredby = '".$_SESSION["name"]."' where id='$qid'";
$up_query=mysqli_query($db,$query1);
if($up_query)
{
    header("location: index.php");
}
else{
    echo "<script>window.alert('Error.');</script>";
}
}
mysqli_close($db);
}
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
    <?php   include('header.php');?>
    <center>
    <div class="container">
            <div class="row" style="margin-top: 50px;margin-bottom:50px;">
                <div class="col-md-12">
                    <center>
                        <h2 style="margin-top: 50px;margin-bottom:50px;">Submit Your Answer Here !</h2>
                        <form id="my-form"  method="post">
                            <input type="text" placeholder="Enter Your Answer..." id="question" name="answer">
                            <button class="btn btn-primary btn-block" type="submit" name="ansubmit" style="margin-top: 50px;margin-bottom:50px;width:40%">Submit Answer</button>
                        </form>
                    </center>
            </div>
        </div>
    </div>
    </center>
    <?php   include('footer.php');?>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>