<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assest/bootstrap.min.css">
  <script src="assest\jquery-3.2.1.js"></script>
   <script src="assest/bootstrap.min.js"></script>
 
 
</head>
<body>


<nav class="navbar navbar-inverse navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Araliya Hotel</a >
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
       
    
    
      
      <li><a href="galery.php">Gallery</a></li>
	  <li><a href="admin.php">Admin</a></li>
      
        <li><a href="contactus.php">Contact Us</a></li> 
        <li><a href="login.php">Logout</a></li> 
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>Remove User Account</h2></div>
    <div class="panel-body">
     <form class="form-horizontal" action="login.php" method="post" >
                        <div class="form-group row col-sm-7">
                            <label class="control-label col-sm-3" for="fn2" >User Type:</label>
                            <div class="col-sm-6">

                                <select class="form-control" id="type" name="utype">
                                    <option value="">---Select User Type---</option>
                                    <option value="admin">Administrator</option>
                                    <option value="cus">Customer</option>
                                    <option value="recp">Receptionist</option>


                                </select>
                            </div></div>

                   

  
  
      
 
    <div>
        <div class="form-group row col-sm-5">
      <label class="control-label col-sm-2" for="ln">UserID:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="addr" name="add" data-validation="required">
      </div>
      </div>
       <br><br>
       
    <div class="form-group row col-sm-10">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger " name="submit">Remove Account</button>
      </div>
    </div>
  </form></div></div>
</div>
<?php 


 ?>
    <script src="assest\jquery1.min.js"></script>
 
 <script src="assest\jquery.form-validator.min.js"></script>

</html>