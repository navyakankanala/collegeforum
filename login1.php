<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
    <meta charset="utf-8">
<meta content="width=device-width, intial-scale=1">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
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
padding: 20px 20px 20px 20px;
border-radius: 30px;
box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.4);
margin: 50px 50px 50px 390px;
}

 </style>
 </head>

 <body >
<div class="container">
<div class="row">
<div class="box col-md-3">
<center><img src="vitslogo.png" width="100" height="100" border="0" alt=""></center>
<form role="form" name="form" method="post" action="login.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" id="email"name=" email"class="form-control" id="email" required pattern="(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" required pattern="[A-Z/a-z/@/1-n].{8,}" title="must contain a upper case char follwed by lower case follwed by@ follwed by number with atleast 8 char">
  </div>
 <p class="text-muted">Not yet registered??   <a href="reg.html">Register here</a></p>
  <center><button type="submit" class="btn btn-primary" name="submit">Login</button></center>
 <a href=""></a>
</form>
 
</div>
</div>
</div>
 </body>
 
</html>