<?php
$conn=new mysqli("localhost","root","","minipro1");
if(!$conn) die("Database connection error".mysqli_error($conn));

if(isset($_POST['submit']))
{
$name=$_POST['uname'];
echo $name;
$email=$_POST['email'];
$gender=$_POST['check'];
$pwd=$_POST['pwd'];
if(isset($_POST['rollno']))
$rollno=$_POST['rollno'];
else
	$rollno="-";
$role=$_POST['role'];

$sql1=$conn->query("INSERT INTO `reg` (`uname`, `email`, `gender`, `pwd`, `rollno`, `role`) VALUES ('$name', '$email', '$gender', '$pwd', '$rollno', '$role')");
if($sql1)
	{
		header("Location:login1.php");
		exit;
	}
	else
	{
		?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> Register </title>
    <meta charset="utf-8">
<meta content="width=device-width, intial-scale=1">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap-4.0.0/bootstrap-4.0.0/dist/css/bootstrap.min.css"/>
  <script src="bootstrap-4.0.0/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
   <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');
@import url('https://fonts.googleapis.com/css?family=Montserrat|Sorts+Mill+Goudy');
body{
margin:0;
padding:0;
background:url("hero-bg.jpg");
background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;
font-family:sans-serif;
}
  
 </style> <style>
body{
margin:0;
padding:0;
background:url("hero-bg.jpg");
background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;
font-family:sans-serif;
}
  
.box{
background-color:white;

padding: 20px 20px 20px 20px;
border-radius: 30px;
box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.4);
margin: 50px 50px 50px 390px;
}

 </style>
<script>
function validate()
{
	if(document.getElementById("pwd").value==document.getElementById("cpwd").value)
	var flag1=true;
	else{
	alert("Please recheck your password!!");
	var flag1=false;
	}

	if((document.getElementById("radio1").value=="")&&(document.getElementById("radio2").value==""))
	{
		alert("Please select any gender");
		var flag2=false;
	}
	else
	var flag2=true;
	if((flag1==true)&&(flag2==true))
	return true;
	else
	return false;
}
</script>
 </head>

 <body>
<div class="container">
<div class="row">
<div class="box col-md-5">
<center><img src="vitslogo.png" width="100" height="100" border="0" alt=""></center>
<form role="form" method="post" action="reg.php" onsubmit="return validate()">

<div class="alert alert-danger">
  <strong>Error!</strong> Please try registering again.
</div>

<div class="form-group">     
    <input type="text" class="form-control" id="name" placeholder="Name" name="uname" required  >
  </div>
 
  <div class="form-group">
   
    <input type="email" class="form-control" id="email" name="email"placeholder="Email ID" required>
  </div>
<div class="row">
<div class="col-md-4">
Gender:
</div>
<div class="col-md-4">
  <div class="radio" >
      <label><input type="radio" value="male" name="check" id="radio1">male</label>
    </div>
	</div>
	<div class="col-md-4">
    <div class="radio">
      <label><input type="radio" value="female" name="check" id="radio2">female</label>
    </div>
	</div>
	</div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="pwd"name="pwd" placeholder="Password" required pattern="[A-Z/a-z/@/1-n].{8,}"  title="must contain a upper case char follwed by lower case follwed by@ follwed by number with atleast 8 char">
  </div>
    <div class="form-group">

    <input type="password" class="form-control" id="cpwd"  name="cpwd" placeholder="ConfirmPassword" required  pattern="[A-Z/a-z/@/1-n].{8,}"  title="must contain a upper case char follwed by lower case follwed by@ follwed by number with atleast 8 char" >
  </div>
 
<div class="form-group">
  <div>
<p>    <input type="text" class="form-control" id="role" name="role"placeholder="Rollno"  required>
  </p>
 </div>
  </div>	


<button type="submit" class="btn btn-info btn-block" onclick="validate()" name="submit">
Register</button>
 
</form>
</div>
</div>
</div>
 </body>
<script>
function validate()
{
if(document.getElementById('pwd').value==document.getElementById('cpwd').value);
{
return true;
}
else
{
 alert("password must be match");
 return false;
 }
</script>
</html>

		<?php
	}
}
?>