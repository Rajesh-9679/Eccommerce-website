<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
</head>
<body>
<!--NAVBAR WITHOUT LOGIN-->
<div class="container-fluid" id="content">
            <div class="navbar navbar-default navbar-fixed-top" style="background-color: orange;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php"> <font color="white"><b>RB Store</b> </font></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right" >
                            <li><a  href = "signup.php"><span class = "glyphicon glyphicon-user"></span><font color="white"><b> Sign Up </b> </font></a></li>
                            <li><a  data-toggle="modal" data-target="#pz" ><span class = "glyphicon glyphicon-log-in"></span><font color="white"><b> Login</b> </font></a></li>
                            <li><a  href = "about_us.php"><span class = "glyphicon glyphicon-list"></span> <font color="white"><b>About Us</b></font> </a></li>
                            <li><a  href = "contact_us.php"><span class = "glyphicon glyphicon-phone"></span><font color="white"> <b>Contact Us </b> </font></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>


<?php require 'login_modal.php'; ?>


</body>
</html>