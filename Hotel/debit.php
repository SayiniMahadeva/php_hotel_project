<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assest/bootstrap.min.css">
  <script src="assest/jquery.min.js"></script>
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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Book Now<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="roomdetails.php">Rooms</a></li>
          <li><a href="rhdetails.php">Reception Halls</a></li>
        </ul>
      </li>
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
        
      </li>

    </ul>
  </div>
</nav>

  </div>
</nav>

<div class="container">
 <div class="panel panel-default">
 <div class="panel-heading"><h2>Debit card payements</h2></div>
    <div class="panel-body">
    
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">CardType:</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type">
      	<option>---Select Card Type---</option>
        <option>VISA</option>
        <option>Master Card</option>
        
        
      </select>
  </div></div>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">Card No:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="fn">
      </div></div>
       <div class="form-group">
         <label class="control-label col-sm-2" for="ln">Expiry Date:</label>
         <div class="col-sm-3">
        <input type="name" class="form-control" id="ln">
      </div>
    </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="ln">Security Code:</label>
         <div class="col-sm-3">
        <input type="name" class="form-control" id="ln">
        <p>The digits after the card number on the signature panel of your card</p>
      </div>
    </div>
    <div class="form-group">
         <label class="control-label col-sm-2" for="ln">Purchase amount:</label>
         <div class="col-sm-3">
        <input type="name" class="form-control" id="ln">
      </div>
    </div>
     <button type="submit" class="btn btn-default">Pay</button>
    </div>
    </div>



    
  </form>
</div>

</body>
</html> 