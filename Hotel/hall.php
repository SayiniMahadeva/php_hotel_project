<!DOCTYPE html>
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
    $( "#datepicker2" ).datepicker();
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
     
      <li><a href="galery.php">Gallery</a></li>
	
      
         <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="login.php">Logout</a></
      </li>

    </ul>
  </div>
</nav>
  </div>
</nav>

<div class="container">
 <div class="panel panel-default">
 <div class="panel-heading">
   <h2>Book Now(Reception Halls)</h2>
 </div>
    <div class="panel-body">
    
  <form class="form-horizontal" >
    <div class="form-group">
    <label class="control-label col-sm-2" for="ln">Check in:</label>
      <div class="col-sm-3">
      <input type="name" class="form-control" id="datepicker">
      </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ln">Check out:</label>
      <div class="col-sm-3">
 <input type="name" class="form-control" id="datepicker2">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">Reception Hall Type:</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>Normal</option>
        <option>Laxuray</option>
        
      </select>
  </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">Reception Hall ID</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>Rose(Normal)</option>
        <option>Bluebell(Lauxary)</option>
       	<option>Jasmine(Laxuray)</option>
      </select>
  </div>
      </div>
       <div class="row">
         <label class="control-label col-sm-2" for="ln2">No of Participents:</label>
         <div class="col-sm-3">
         <input type="name" class="form-control" id="fn">
      </div>
        
      </div></div>    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <br><br><button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html> 