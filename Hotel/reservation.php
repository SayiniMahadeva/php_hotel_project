<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assest/bootstrap.min.css">
  <script src="assest\jquery-3.2.1.js"></script>
  <script src="assest/bootstrap.min.js"></script>
  <link href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
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
        <li><a href="login.php">Logout</a></li> 
       
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>Reservation Details</h2></div>
    <div class="panel-body">

  
  <form class="form-horizontal">
    <div class="row">
      <label class="control-label col-sm-3" for="fn">Customer ID:</label>
       
      <div class="col-sm-3"><h5>klskskp</h5></div>
        <label class="control-label col-sm-2" for="ln">Reservation No:</label>
	<div class="col-sm-3"><h5>klskskp</h5></div>
      </div>
         <div class="row">
           <label class="control-label col-sm-3" for="fn2">Reservation Date:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
           <label class="control-label col-sm-2" for="ln2">Check In:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
      </div>
         <div class="row">
           <label class="control-label col-sm-3" for="fn3">Check Out:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
           <label class="control-label col-sm-2" for="ln3">Room No:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
      </div>
         <div class="row">
           <label class="control-label col-sm-3" for="fn4">Hall No:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
           <label class="control-label col-sm-2" for="ln4"> No of Members:</label>
           <div class="col-sm-3"><h5>klskskp</h5></div>
      </div>
         <div class="row">
      <label class="control-label col-sm-3" for="fn">No of Reservation:</label>
      <div class="col-sm-3"><h5>klskskp</h5></div>
</div>      
    <div class="form-group row col-sm-10">     
    <h5><strong>Cancelation Policy:</strong></h5>   
    <ul><li>Customers need to cancel the booking before 24 hrs. Otherwise their credit card will be charged for one day.</li></ul><br><br>
                
      <div class="col-sm-offset-2 col-sm-10">
        <a href="bill.php" class="btn btn-info" role="button"><i class="fa fa-credit-card"></i>&nbsp; Pay Online</a>
          </div>
      
    </div>
  </form></div></div>
</div>

</body>
</html>