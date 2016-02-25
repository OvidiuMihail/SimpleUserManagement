<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


  <?php
  // foloseste o librarie pentru data table si cu panel sa le fac frumix 
  ?>
  
  
<html lang="en">
<head>
  <title>PROFIL</title>
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
      background-color: #f2f2f2;
      padding: 20px;
    }
	
	    header {
      background-color: #a9a9a9;
      padding: 20px;
    }
	
	
  </style>
</head>
<body>

  <?php
	
	echo form_open('Main/self_edit'); 					// DESCHIDE FORM-UL SPECIFIC CodeIgniter; ARGUMENT ESTE FUNCTIA LA CARE SE FOLOSESTE DIN MAIN
																// correct form is ('CONTROLLER/FUNCTIONxMETHOD');
	echo validation_errors();									// IN INTERIORUL FORMULUI
	
?>




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
  <h1>PROFIL</h1><br>
</header>


<div class "container text-center">
<h1> </h1>
<h1> </h1>
</div>









<div class="container">
<div class="col-sm-10">




<div class="panel panel-default">   
	
   <div class="panel-heading">
      USERNAME
   </div>
  
   <div class="panel-body">
      <?php
	  echo $nume;	  
	  ?>
   </div>
   
    <div class="panel-heading">
	<?php
		echo "<p>";
		echo form_input('new_nume');								
		echo "</p>";
	?>
      </div>

</div>


<div class="panel panel-default">   
	
   <div class="panel-heading">
      NUME
   </div>
  
   <div class="panel-body">
      <?php
	  echo $nume_buletin;	  
	  ?>
   </div>
   
    <div class="panel-heading">
	<?php
		echo "<p>";
		echo form_input('new_nume_buletin');								
		echo "</p>";
	?>
      </div>

</div>

<div class="panel panel-default">
   <div class="panel-heading">
      E-MAIL
   </div>
   <div class="panel-body">
         <?php
	  echo $email;	  
	  ?>
   </div>
       <div class="panel-heading">
	<?php
		echo "<p>";
		echo form_input('new_email');								
		echo "</p>";
	?>
      </div>
</div>


<div class="panel panel-default">
   <div class="panel-heading">
      TELEFON
   </div>
   <div class="panel-body">
      <?php
	  echo $telefon;	  
	  ?>   
	  </div>
	      <div class="panel-heading">
	<?php
		echo "<p>";
		echo form_input('new_telefon');								
		echo "</p>";
	?>
      </div>
</div>


<div class="panel panel-default">
   <div class="panel-heading">
      DESCRIPTION
   </div>
   <div class="panel-body">
	      <?php
	  echo $description;	  
	  ?>
   </div>
       <div class="panel-heading">
	<?php
		echo "<p>";
		echo form_textarea('new_description');								
		echo "</p>";
	?>
      </div>
</div>


<div class="panel panel-default">
   <div class="panel-heading">
      GRUPA VARSTA
   </div>
   <div class="panel-body">
            <?php
	  echo $g_varsta;	  
	  ?>
   </div>
    <div class="panel-heading">
	<?php
	echo "<p>";
   $options = array(
                  'infant'  => 'Infant',
                  'adult'    => 'Adult',
                  'senior'   => 'Senior',
                );

	echo form_dropdown('new_g_varsta', $options);
	echo "</p>";
	?>
      </div>
</div>


<div class="panel panel-default ">
   <div class="panel-heading">
      PRIVILEGII ADMINISTRATIVE
   </div>
   <div class="panel-body">
           <?php
	  echo $admin;	  
	  ?>
   </div>
</div>



<div class="pull-right">  
	<?php 
 	
		echo "<p>";
		echo form_submit('user_changes_array ', 'SAVE CHANGES', "class='btn-lg btn-success'");					// EFECTUARE SUBMIT CLASS = e ala de CSS / BOOTSTRAP
		echo "</p>";
	?>
</div>

  </div>
  <div class="col-sm-2">


	   
	<?php 
 	
		echo "<p>";
		echo form_submit('user_changes_array ', 'SAVE CHANGES', "class='btn-lg btn-success'");					// EFECTUARE SUBMIT CLASS = e ala de CSS / BOOTSTRAP
		echo "</p>";
	?>
  
  
  </div>
   
    </div>
	   
    </div>
	   

	   


	   
	   
	   
	   

</body>
</html>

	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   



<br>

<footer class="container-fluid text-center">
 <a href="http://www.cloud-ro.com/"> <h2>FOOTER PENTRU DACA O SA VREAU SA PUN CEVA AICI</h2></a>
</footer>

</body>
</html>

</body>
</html>