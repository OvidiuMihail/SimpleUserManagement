<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #9ACD32;
      padding: 20px;
    }
	
	    header {
      background-color: #a9a9a9;
      padding: 20px;
    }
  
  </style>
</head>
<body>
<--#a9a9a9
<--#f2f2f2
<nav class="navbar navbar-inverse">

  <div class="container-fluid">
  
  
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TEXT AICI DACA E NEVOIE</a>
    </div>
	
	
	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">SAU</a></li>
        <li><a href="#">AICI</a></li>
        <li><a href="#">ALTE</a></li>
        <li><a href="#">BUTOANE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  
  </div>
</nav>
 
 
<header class="container-fluid text-center">    
  <h1>Login</h1><br>
</header>
<div class "container text-center">
<h1> </h1>
<h1> </h1>
</div>
  <div class="container text-center">  
  <?php
	
	echo form_open('Main/login_validation'); 					// DESCHIDE FORM-UL SPECIFIC CodeIgniter; ARGUMENT ESTE FUNCTIA LA CARE SE FOLOSESTE DIN MAIN
																// correct form is ('CONTROLLER/FUNCTIONxMETHOD');
	echo validation_errors();									// IN INTERIORUL FORMULUI
	
?>
	
    <div class="row">
    <div class="col-sm-4">
    <div class="well">
	<?php
		echo "<p>Username: ";
		echo form_input('username');								// ASA PRELUAM IN POST NUME 
		echo "</p>";
	?>
      </div>
      <div class="well">
    <?php 
		echo "<p>Parola: ";
		echo form_password('password');								// ASA PRELUAM PAROLA
		echo "</p>";	
	?>
      </div>
	    <?php 
 	
		echo "<p>";
		echo form_submit('login_submit', 'SUBMIT', "class='btn-lg btn-success'");					// EFECTUARE SUBMIT CLASS = e ala de CSS / BOOTSTRAP
		echo "</p>";
	?>
   
    </div>
	
	

   <div class="col-sm-4">
		<h1>CLOUD BUSINESS SERVICES</h1>
    </div>
    <div class="col-sm-4"> 
		<a href="http://www.cloud-ro.com/"><img src="http://www.cloud-ro.com/imagini/main-theme.png" class="img-responsive" style="width:100%" alt="Image"></a>
    <h3>^^^ Visit our website here! ^^^</h3>
	</div>

  </div>
</div><br>

<footer class="container-fluid text-center">
 <a href="http://www.cloud-ro.com/"> <h2 class="text-center"><a class="text-muted" href="#">RESET PASSWORD </a></h2></a>
</footer>

</body>
</html>

</body>
</html>