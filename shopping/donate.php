<?php 
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['login'])==0)
{
header('location:login.php');
}?>
<?php
if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $email=$_POST['email'];
     $amount=$_POST['amount'];


$query=mysqli_query($con,"insert into donate(name,email,amount) values('".$name."','".$email."','".$amount."')");
echo "<script>alert('Thank you for donating');</script>";
header('location:index.php');
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>Donate Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
        <?php include('includes/top-header.php');?>
        <?php include('includes/main-header.php');?>
        <?php include('includes/menu-bar.php');?>
    </header>
    <div class="body-content outer-top-xs">
        <div class='container text-center'>
            <form name="donate" method="POST">

                <div class="control-group " style="display:flex; justify-content:center;margin:5px">
                    <label class="control-label" style="margin-right:5px" for="basicinput">Name</label>
                    <div class="controls">
                        <input style="align:center" type=" text" id="basicinput" name="name" placeholder="Name...."
                            class="span8 tip" required>
                    </div>
                </div>

                <div class="control-group " style="display:flex; justify-content:center;margin:5px">
                    <label class="control-label" style="margin-right:5px" for="basicinput">Email</label>
                    <div class="controls">
                        <input type="email" id="basicinput" name="email" placeholder="Eamil...." class="span8 tip"
                            required>
                    </div>
                </div>
                <div class="control-group " style="display:flex; justify-content:center; margin:5px">
                    <label class="control-label" style="margin-right:5px" for="basicinput">Amount</label>
                    <div class="controls">
                        <input type="number" id="basicinput" name="amount" placeholder="Amount...." class="span8 tip"
                            required>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls" style="margin:0px">
                        <button type="submit" name="submit" class="btn">Donate</button>
                    </div>
                    <div></div>
                    <div></div>

                </div>
                <div class="control-group">
                    <div class="controls" style="margin:0px"> <button onclick="
                        printDiv(<?php echo $price=$row['amount'];?>)">
                            Download pdf
                        </button>
                    </div>
                </div>
                <script language="javascript" type="text/javascript">
                function printDiv(donate)) {
                    var doc = new jsPDF();
                    alert('') doc.fromHTML(`<html>
                < head>
                    < title> Pdf generation < /title>
                            < /head>

                                < body>
                                    < h1> Dear User < /h1>
                                            < h2> & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; &
                                                nbsp; & nbsp; & nbsp; & nbsp
                                                ; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; & nbsp; &
                                                nbsp;
                                                Product
                                                Price: < strong> $ {
                                                    amount
                                                    }
                                                    } < /strong>
                                                        </h2>
                                                        < h2> Thank YOU For Ordering < /h2>
                                                                < h2> We hope you enjoy our service < /h2>
                                                                        < /body>

                                                                            </html>`);
                    doc.save('order.pdf'); < /script>
                } < form >
                    <
                    /div> < /
                div > <
                    /body>

                    <
                    /html>