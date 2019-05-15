<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Book Now<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="roomdetails.php">Rooms</a></li>
          <li><a href="rhdetails.php">Reception Halls</a></li>
        </ul>
      </li>
     
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
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>Receptionist Login</h2></div>
    <div class="panel-body">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Receptionist ID:</label>
      <div class="col-sm-2">
        <input type="name" class="form-control" id="name" placeholder="Enter ID" name="id">
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Username:</label>
      <div class="col-sm-5">
        <input type="name" class="form-control" id="name" placeholder="Enter Username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
         <a href="cash.php" class="btn btn-info" role="button">Submit</a
      ></div>
    </div>
  </form>
</div>
<div>



</div>

</body>
</html>
