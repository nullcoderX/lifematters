	<!DOCTYPE html>
	<html lang="en">
	<html>


	<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Latest compiled JavaScript -->
		<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
		
	<!-- W3.CSS is a modern CSS framework -->		
		<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
			
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

/* edit profile css*/

.hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
.hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}
.fom-main { overflow:hidden;}

legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
.main_form {background-color: #;}
label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 
text-align:left !important; text-transform:uppercase; color:#798288;}
.submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
float:left;}
.submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
.hint_icon {color:#ff3200;}
.form-control:focus {border-color: #ff3200;}
select.selectpicker { color:#99999c;}
select.selectpicker option { color:#000 !important;}
select.selectpicker option:first-child { color:#99999c;}
.input-group { width:100%;}
.uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
.uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
 transition:all ease 0.3s;margin: 5px;}
.uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;
filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
.uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
.bio-table { width:75%;border:0px solid;}
.bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}
.bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}
.responsiv-table { border:0px solid;}
.nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
.nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
.stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
-webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
.stick a { line-height:20px !important;}
.stick img { margin:0 !important;}


}

	</style>
	
	</head>

	<body class="w3-theme-l5">
		
	
<?php

session_start();

  $con = new MongoClient();
  if($con)
  {
    $database=$con->organ;
    $collection=$database->receiverinfo;
    $cursor = $collection->find(array("email"=>$_SESSION['email']));
    $cursor_count = $cursor->count();
    foreach ($cursor as $venue)
    {
?>

<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px"> 

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:20px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">      

							

      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"> Profile</h4>
         <p class="w3-center"><img src="img/a1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
        <?php echo" <p><i class='fa fa-user-circle fa-fw w3-margin-right w3-text-theme'></i>" .$venue ['info']['firstname'] ."  " .$venue ['info']['middlename'] . "  "  .$venue ['info']['lastname'] . " </p>"; ?>
								<?php echo"<p> <i class='fa fa-hospital-o fa-fw w3-margin-right w3-text-theme'></i>"  .$venue ['hospital']['hospital'] ."</p>"; ?>        
 							<?php echo"<p> <i class='fa fa-gratipay fa-fw w3-margin-right w3-text-theme'></i>" .$venue ['organ']['kidney'] .$venue ['organ']['liver'] .$venue ['organ']['lportion'] .$venue ['organ']['pancreas'] . "</p>"; ?>        
								<?php	echo"<p><i class='fa fa-btc fa-fw w3-margin-right w3-text-theme'></i>" .$venue ['info']['blood'] ." </p>"; ?>																					
									<?php	echo"<p><i class='fa fa-odnoklassniki fa-fw w3-margin-right w3-text-theme'></i>" .$venue ['info']['gender'] ." </p>"; ?>
         <?php echo"<p><i class='fa fa-calendar fa-fw w3-margin-right w3-text-theme'></i>" .$venue ['info'] ['day'] .$venue ['info'] ['month'].$venue ['info'] ['year']. "</p>";?>
        </div>
      </div> 
				
				<!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m9">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity "> Wel-Come </h6>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="img-1/ab.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
        <span class="w3-right w3-opacity">  </span>
        <h4> Patient information </h4><br>
       <hr>
        

									<?php	


															echo"<div class='row'>";
															echo"	<div class='col-md-12'>";
														
															echo"</div>";

											
																						echo"	<div class='col-md-6'>";
																							echo"<div class='table-responsive responsiv-table'>";
 																					 echo"<table class='table bio-table table-hover  table-condensed '>";
																																		echo"<tbody>";

																																	echo"<tr>  <td>First Name :- </td> ";
																																																																													echo" <td>".$venue ['info']['firstname'] . "</td>"; 
																																																																					echo" </tr>";

																																																																				echo"<tr>  <td> Middle Name :- </td> ";
																																																																													echo" <td>".$venue ['info']['middlename'] . "</td>"; 
																																																																					echo" </tr>";

																																																																				echo"<tr>  <td> Last Name :- </td> ";
																																																																													echo" <td>".$venue ['info']['lastname'] . "</td>"; 
																																																																					echo" </tr>";
																																																																					echo"<tr>  <td> Gender :- </td> ";
																																																																													echo" <td>".$venue ['info']['gender'] . "</td>"; 
																																																																					echo" </tr>";

																																																																				echo"<tr>  <td> Birth Date :- </td> ";
    																																																																									echo "<td>" .$venue ['info'] ['day'] .$venue ['info'] ['month'].$venue ['info'] ['year']. "</td>";
																																																																					echo" </tr>";

																																																																				echo"<tr>  <td> Blood group :- </td> ";
																																																																													echo" <td>".$venue ['info']['blood'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> Birth Place :- </td> ";
																																																																													echo" <td>".$venue ['info']['dobplace'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> Mobile Number :- </td> ";
																																																																													echo" <td>".$venue ['info']['mobileno'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td>  Address :- </td> ";
																																																																													echo" <td>".$venue ['info']['address'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> city:- </td> ";
																																																																													echo" <td>".$venue ['info']['city'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> state:- </td> ";
																																																																													echo" <td>".$venue ['info']['state'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> Nationality :- </td> ";
																																																																													echo" <td>".$venue ['info']['nati'] . "</td>"; 
																																																																					echo" </tr>";
																																																																				echo"<tr>  <td> Zip Code :- </td> ";
																																																																													echo" <td>".$venue ['info']['zipcode'] . "</td>"; 
																																																																					echo" </tr>";
										
																															echo" </tbody>";
																															echo"</table>";
																															echo" </div>";
																															echo"</div>";

																			echo"	<div class='col-md-6'>";
																												echo"<div class='table-responsive responsiv-table'>";
																													echo"<table class='table bio-table table-hover  table-condensed'>";
																									echo"<tbody>";

																							echo"<tr>  <td> hospital-1 :- </td> ";
																																																																													echo" <td>".$venue ['hospital']['hospital'] . "</td>"; 
																																																																					echo" </tr>";
																																																																			
																																																																					echo "</tr>";
																																																																				echo "<tc>";
    																																																																echo "<td> Follwing Organ to be Wanted :- </td>";
    																																																																	echo "</tc>";
	   																																																																 
																																																																				echo "<tr>";																																																																				
																																																																				echo "<td>Organ1 :- </td>";
    																																																																echo "<td>".$venue ['organ']['kidney'] . "</td>"; 
																																																																					echo" </tr>";

																																																																			echo "<tr>";
																																																																			echo "<td>Organ. 2 :- </td>";
																																																																			echo "<td>".$venue ['organ']['liver'] . "</td>";
																																																																			echo "</tr>";
																																																																				 
																																																																					echo "<tr>";
																																																																					echo "<td>Organ. 3 :- </td>";
																																																																					echo "<td>".$venue ['organ']['lportion'] . "</td>";
																																																																					echo "</tr>";

																																																																					echo "<tr>";
																																																																					echo "<td>Organ. 4 :- </td>";
																																																																					echo "<td>".$venue ['organ']['pancreas'] . "</td>";
																																																																					echo "</tr>";
										
																						echo" </tbody>";
																						echo"</table>";
																						echo" </div>";
																						echo"</div>";


echo"</div>";
echo"</div>";
echo"</div>";
?>
      
     
      
    <!-- End Middle Column -->
    </div>
    
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>

<?php


}
}
?>
    
   
</body>
</html>
