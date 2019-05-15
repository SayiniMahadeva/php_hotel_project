<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assest/bootstrap.min.css">
  <script src="assest/jquery.min.js"></script>
  <script src="assest/bootstrap.min.js"></script>
     <link rel="stylesheet" href="assest/jquery-ui-1.12.1.custom/jquery-ui.css">
  <script src="assest/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

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
>
    </ul>
  </div>
</nav>
<div class="container">
 <div class="panel panel-default">
 <div class="panel-heading">
   <h2>Calculate the Bill</h2>
 </div>
    <div class="panel-body">
    
  <form class="form-horizontal">
    <div class="form-group row col-sm-12">
      <label class="control-label col-sm-2" for="fn2">Bill ID:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="fn"  data-validation="required">
      </div>
       <div class="form-group ">
         <label class="control-label col-sm-2" for="ln">Date:</label>
         <div class="col-sm-3">
       <input type="text" class="form-control" id="datepicker">
      </div>
    </div>
    <div class="form-group row col-sm-12">
      <label class="control-label col-sm-2" for="ln2">Customer ID:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="ln"  data-validation="required">
      </div>
    </div>
    
     <div class="form-group ">
         <label class="control-label col-sm-2" for="ln">Amount:</label>
         <div class="col-sm-3">
        <input type="name" class="form-control" id="ln">
      </div></div>
      <a href="#" class="btn btn-info col-lg3" role="button">Submit</a>



    
  </form>
</div>

</body>
</html> 