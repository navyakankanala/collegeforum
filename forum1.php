<?php


$conn=new mysqli("localhost","root","","minipro1");
if(!$conn) die("Database connection error".mysqli_error($conn));

$date=date('d/m/Y');
$time=time();
$sql3=$conn->query("select * from q_ans");

if(isset($_POST['dis']))
{
 /* $qid=$_POST['qid'];
  $ans=$_POST['ans'];
  echo $qid;
  echo $ans;
  $sql="UPDATE `q_ans` SET `ans`='$ans' WHERE `qid`='$qid'";
  $query=mysqli_query($conn,$sql);*/
  $qid=$_POST['qid'];
  $ans=$_POST['ans'];
 /* echo $qid;
  echo $ans;*/
 /* $add='!@#$';
  $new=$_POST['ans'];
  $query="SELECT `ans` FROM `q_ans`  WHERE `qid`='$qid'";
  $res=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($res);
    $old=$row['ans'];
    $ans=$old.$add.$new;*/
    $add='!@#$';
  $add1='%*';
  $new=$_POST['ans'];
  $query="SELECT `ans` FROM `q_ans`  WHERE `qid`='$qid'";
  $res=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($res);
    $old=$row['ans'];
    $ans=$old.$add.$new.$add1.$_SESSION['user'];


}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     
      <link rel="shortcut icon" href="vitslogo.png" type="image/png" ><title>STUDENT DISCUSSION FORUM</title>
      
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     
      
      <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      
  </head>

  <body>
<style>
.look{
font-family:"algerian",monospace;
color: #33cc99;
font-size: 20px;
}
p{
  font-family:"algerian",monospace;
color: #33cc99;
font-size: 20px;
}
h4{
  font-family:;
color: black;
font-size: 15px;
}
</style>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="vitslogo.png" class="img-rounded" width=64px heigth=64px alt="Cinque Terre"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
             <!-- <a class="btn " style="background-color:khaki;" type="button" href="askq.php">Ask question</a>-->
            </li>
             
              
          
              <li class="nav-item">
                  <a href="reg.html" class="btn btn-primary" role="button">register</a>
                
              </li>
              <li class="nav-item"><a class="nav-link" href="index.html" color="red"></a></li>
              <li class="nav-item">
                  <a href="login1.php" class="btn btn-success" role="button">login</a>      
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-9">

          <h5 class="my-5">WELCOME TO <large class="text-warning">College forum </large>
            
          </h5>
            <button type="button" class="btn btn-primary">Recently Asked Questions</button> 
            <!-- Blog Post -->
            <br><br>


 <div class="card mb-4">
   <div class="look">                
 <div class="card-header " style="background-color:floralwhite;">navya<large  class="text-danger"></large></div></div>

               <div class="card-body">
              <h4    class="card-title">Differnce between php and html</h4></div>
            <div class="card-footer text-muted">
            <!--  <p> <i class="fas fa-eye"></i>100 views
  </p><i class="fas fa-comments"></i> 24 comments -->
                <div class="row">
  <!--  <div class="col-sm-6" >
      <p><i class="fas fa-eye"></i>Discuss</p>
    </div>-->
    <div class="col-sm-6" >
      <p><i class="fas fa-comments"></i>Answer By:</p>
      
         <h4>
          Php: 
         Php is used as a interface between the datababase server and front end of the page and we are able to write the front end by using php
         Html:
         Html is a mark up language that is used to display the design of your webpage....

         For more information search in W3 schools. it helps u a lot...<br>   
        <br>navya@gmail.com</h4><br>
      </h4>
     
    </div>

                   
  </div>


 <div class="row">
  <!--  <div class="col-sm-6" >
        <p><i class="fas fa-eye"></i>Discuss</p>
    </div>-->
  

                   
  </div>


              </div>
          </div> 







        <?php while($row=mysqli_fetch_array($sql3))
         {?>
             <div class="card mb-4">
  <div class="look">                 
 <div class="card-header " style="background-color:floralwhite;"><?php echo $row['uname'];?><large  class="text-danger"></large></div></div>

               <div class="card-body">
              <h4    class="card-title"><?php echo $row['ques'] ?>?</h4>                   </div>
            <div class="card-footer text-muted">
            <!--  <p> <i class="fas fa-eye"></i>100 views
  </p><i class="fas fa-comments"></i> 24 comments -->
                <div class="row">
  <!--  <div class="col-sm-6" >
      <p><i class="fas fa-eye"></i>Discuss</p>
    </div>-->
    <div class="col-sm-6" >
      
      <h4>
        <!--<?php echo $row['ans'];?>-->
       <!-- <?php
     $data=$row['ans'];
     $splittedstring=explode("!@#$",$data);
   foreach ($splittedstring as $key => $value) {
    if($value!="")
    echo $value."<br>";
}
      ?>-->
      <?php
     $data=$row['ans'];
     $splittedstring=explode("!@#$",$data);
     $i=0;
   foreach ($splittedstring as $key => $value) {
    $splittedstring1=explode("%*", $value);
   /* if($value!="")
    echo $value;*/
    if($i!=0)
    {
       echo "<p><i class='fas fa-comments'></i>Answer By:</p>";
    }
   $i++;
foreach($splittedstring1 as $key=>$value){
if($value!='')
  echo "<h6>".$value."<br><h6>" ;
}
}
      ?>
      </h4>
    </div>

                   
  </div>


 <div class="row">
  <!--  <div class="col-sm-6" >
      <p><i class="fas fa-eye"></i>Discuss</p>
    </div>-->
   <!--<div class="form-group">
      <label for="usr" class="col-sm-6">
      <p><i class="fas fa-eye"></i>Discuss</p>
  </label>
 <div class="input-group">
   
     
     <div class="form-inline">
       <form method="POST" action=""> 
      <input type="hidden" name="qid" value="<?php echo $row['qid'];?>">
<input type="text" class="form-control" name="ans" id="usr">&nbsp;&nbsp;
<button type="submit" name="dis" class="btn btn-primary">Discuss</button>
</form>
</div>
   
</div>


    </div>-->

                   
  </div>


              </div>
          </div> 
         <?php }?>
            
            <!--2nd card-->
           

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
