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
		

<style>
  	
		  	
* {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font: 16px Helvetica;
  background: ;
}

section {
  width: 330px;
  background: #ffffff;
  padding: 0 30px 30px 30px;
  margin: 60px auto;
  text-align: center;
  border-radius: 5px;
		color:#000000;

/*  transition Effect */  

		position: ;
		z-index: 999;
		border: 0px solid;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		transition:all ease 0.8s;
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
}

span {
  display: block;
  position: relative;
  margin: 0 auto;
  top: -40px;
  height: 80px;
  width: 80px;
  background: url('img/a2.png') center center no-repeat, #f39c12;
  border-radius: 50%;
  box-shadow: 1px 1px 2px rgba(0,0,0,.3);

}

h1 {
  font-size: 24px;
  font-weight: 100;
  margin-bottom: 30px;
}

input {
  width: 100%;
  background: #000000;
  border: none;
  height: 30px;
  margin-bottom: 15px;
  border-radius: 5px;
  text-align: left;
  font-size: 14px;
  color: #000000;
}

input:focus {
  outline: none;
}

.btn  {
  width: 50%;
  height: 30px;
  border: none;
  background: #008000;
  color:  #ffffff;
  font-weight: 100;
  margin-bottom: 15px;
  border-radius: 5px;
  transition: all ease-in-out .2s;

}

.btn:focus {
  outline: none;
}

.btn:hover {
  background: #ff751a;
}

h2 {
  font-size: .75em;
}

a {
  color: #000000;
  text-decoration: none;
  transition: all ease-in-out .2s;
}

a:hover {
  color: #c0392b;
}

p {
  text-align: left;
font-size: .85em;
  width: 100%;
}

</style>  

<script type="text/javascript">
	function validate(form) {

	//	String uname = document.getElementByName("uname").value;
	//	String password = document.getElementsByName("upwd").value;
		
		var uname=form.uname.value;
		var password=form.upwd.value;
		if(uname.localeCompare("Admin")==0){
			if(password.localeCompare("Admin")==0)
				return true;
			else{
				alert("Invalid username or password..!");
				return false;
			}
		}
		else{
			alert("Invalid username or password..!");
			return false;
		}
	}
</script>

</head>

<body>

<form method="post" name="login1" onSubmit="return validate(login1)">

<section>
  <span></span>
  <h1>Member Login</h1>
  <form>




<table>		
      			
      			<tr>
      				<td>		
      				<p> Email-ID :-</p>
					</td>
						<td>
							<input type="text" class="form-control"  name="uname" placeholder="Email-ID" required>
						</td>
    			</tr>
		
    			<tr>			
    			<td>
				
				</br>
				
				
				<tr>
      				<td>		
      	<p> Password :-</p>
					</td>
						<td>
							<input type="password" class="form-control"  name="password" placeholder="**********" required>
						</td>
    			</tr>

</table>
		

  </form>
</br>
<input type="submit" name="submit" onclick="" class="btn btn-default" value="submit"/>
  
</section>


								

	</form>
		

</body>
</html>


<?php

session_start();

echo $_SESSION['uname'];

if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];

    $_SESSION['uname']=$uname;
    
    $password=$_POST['password'];


    
  $con = new MongoClient();

  if($con)
  {
    

    $database=$con->organ;
    $collection=$database->admin;
  

  //$qry = array('login'=>array("email" => $login,"password" => $pass));
  $qry = array("uname" => $uname,"password" => $password);
  $result = $collection->findOne($qry); 

    
  
  if($result)
  {

?>

  <script>
  alert('Successfully Login...');
                  //window.location.href="Admin.php";
                  (window.parent || window).location.href="Admin.php";
               </script>

<?php
  }

  else
  {
?>

  <script>alert('Invalid Email-ID OR Password .');
                    
                 </script>  

<?php
  }


  }
  else
  {
die("Mongo DB not installed");
  } 
    


    //$data=array('session'=>array('name'=>$name,'address'=>$address));
    //$data=array('user'=>array('loginid'=>$rlogin,'password'=>$rpass));
    //$collection->insert($data);

  


}

?>
