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
       <li><a href="login.php">Login</a></li>
     
     
      
      <li><a href="galery.php">Gallery</a></li>
	  <li><a href="admin.php">Admin</a></li>
       <li><a href="bill.php">Bill</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Payments<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="credit.php">Credit Card</a></li>
          <li><a href="debit.php">Debit Card</a></li>
          <li><a href="cash.php">Cash</a></li>
        </ul>
         <li><a href="contactus.php">Contact Us</a></li>
                 <li><a href="login.php">Logout</a></li 

      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>Cash Payment</h2></div>
    <div class="panel-body">

  
  <form class="form-horizontal">
    <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Bill Id:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="fn"  data-validation="required">
      </div>
      <label class="control-label col-sm-2" for="ln">Recipt ID:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="ln" data-validation="required"><br>
      </div></div>
      <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Date:</label>
      <div class="col-sm-3 ">
        <input type="name" class="form-control" id="fn">
      </div></div>
       <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Amount:</label>
      <div class="col-sm-3 ">
        <input type="name" class="form-control" id="fn">
      </div></div>
       <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Payments:</label>
      <div class="col-sm-3 ">
        <input type="name" class="form-control" id="fn"place holder="LKR">
        </div></div>
              <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Balance:</label>
      <div class="col-sm-3 ">
        <input type="name" class="form-control" id="fn"place holder="LKR">
        </div></div>
           <div class="form-group row col-sm-10">        
      <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn-primary" type="submit" value="Submit">
      <input class="btn btn-primary" float="left" type="reset" value="Reset">
      
    </div>
    </form>
    </div>
    </div>
    </div>
    </body>
    </html>