<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

  $sername=$_POST['sername'];
  $cost=$_POST['cost'];
 
 $eid=$_GET['editid'];

  $query=mysqli_query($con, "delete from tblservices where ServiceName='$sername'");
    if ($query) {
    $msg="Selected service has been deleted";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>
<html>
<head>
  <title>delete-services</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  
  <style>
    

    .qwe a
    {
      text-decoration: none;
    }

  </style>



<section id="service">
  <div class="title-text">
    <H1>Delete the selected service?</H1>
  </div>

 
  <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblservices where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group"> <label for="exampleInputEmail1">Service Name</label> <input type="text" class="form-control" id="sername" name="sername" placeholder="Service Name" value="<?php  echo $row['ServiceName'];?>" required="true"> </div> <div class="form-group"> <label for="exampleInputPassword1">Cost</label> <input type="text" id="cost" name="cost" class="form-control" placeholder="Cost" value="<?php  echo $row['Cost'];?>" required="true"> </div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">CONFIRM DELETE</button>


<button type="submit" name="" class="btn btn-default"> <div class="qwe"><a href="home.php"> BACK</a></div></button>
                 </form> 
						</div>
						
					</div>
				</div>
				
			</div>
		</div> 
 



</body>
</html>