<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>RESET EMAIL</title>
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

 
 
<header class="container-fluid text-center">    
  <h1>RESET EMAIL</h1><br>
</header>


<div class "container text-center">
<h1> </h1>
<h1> </h1>
</div>
  <div class="container text-center">  
  <?php
	
	echo form_open('Reset/execute'); 					// DESCHIDE FORM-UL SPECIFIC CodeIgniter; ARGUMENT ESTE FUNCTIA LA CARE SE FOLOSESTE DIN MAIN
																// correct form is ('CONTROLLER/FUNCTIONxMETHOD');
	echo validation_errors();									// IN INTERIORUL FORMULUI
	
?>

    <div class="row">
    <div class="col-sm-4">
    <div class="well">
	<?php
		echo "<p>INTRODU EMAIL AICI: ";
		echo form_input('reset_email');								// ASA PRELUAM IN POST NUME 
		echo "</p>";
	?>
      </div>
	    <?php 
 	
		echo "<p>";
		echo form_submit('reset_submit', 'RESET', "class='btn-lg btn-success'");					// EFECTUARE SUBMIT CLASS = e ala de CSS / BOOTSTRAP
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
</div>

























</body>
</html>

</body>
</html>