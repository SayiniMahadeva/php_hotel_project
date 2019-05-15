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
              <li><a href="userreg.php">User Registration</a></li> 
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>User Registration Form</h2></div>
    <div class="panel-body">

  
  <form class="form-horizontal" action="userreg.php" method="post">
    <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">First Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="fn" name="fn" data-validation="required">
      </div>
      <label class="control-label col-sm-2" for="ln">Last Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="ln" name="ln" data-validation="required">
      </div>
    </div>
    <div>
        
         <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn2">User Type:</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type" name="utype">
      	<option value="">---Select User Type---</option>
        <option value="admin">Administrator</option>
        <option value="recp">Receptionist</option>
        
        
      </select>
  </div></div>
       <div class="form-group row 	col-sm-10">
      <label class="control-label col-sm-2" for="fn">Username:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="fn" name="un" data-validation="required">
      </div></div>
    <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="pwd">Create a Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" data-validation="required">
      </div>
      </div>
          <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="pwd">Confirm your Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="pwd" placeholder="Reenter password" name="conp" required>
      </div></div>
       <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Contact No:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="mobile-num" name="cn">
      </div></div>
      <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email"data-validation="email">
      </div>

    </div>
    <div class="form-group row col-sm-10">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Register</button>
      </div>
    </div>
  </form></div></div>
</div>
<?php 
$con=mysqli_connect("localhost","root","","hotel") or die('site is under construction');

if(isset($_POST['submit'])){
	$firstName=$_POST['fn'];
	$lastName=$_POST['ln'];
	$userId=$_POST['uid'];
	$userName=$_POST['un'];
	$password=$_POST['pwd'];
	$confirmpassword=$_POST['conp'];
	$contactNo=$_POST['cn'];
	$email=$_POST['email'];
	$usertype=$_POST['utype'];
	if($password==$confirmpassword){
		
	
	$queary="INSERT INTO `hotel`.`user` (`Username`, `Password`, `First Name`, `Last Name`, `Email`, `Contact No`, `UserID`, `UserType`) VALUES ('{$userName}', '{$password}', '{$firstName}', '{$lastName}', '{$email}', '{$contactNo}', NULL, '{$usertype}');";

	
	if(mysqli_query($con,$queary)){
		
		echo 'Success';
		}else{
			echo 'Error';
			}
	
	}else{
		echo 'password is not match';
	}
	}



 ?>
 
     <script src="assest\jquery1.min.js"></script>
 
 <script src="assest\jquery.form-validator.min.js"></script>
 
 
  <script>
  $.validate({
    lang: 'en'
  });

  $(document).ready(function(){
  
  $("#mobile-num").on("blur", function(){
        var mobNum = $(this).val();
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if (filter.test(mobNum)) {
            if(mobNum.length==10){
                //  alert("valid");
              $("#mobile-valid").removeClass("hidden");
              $("#folio-invalid").addClass("hidden");
             } else {
				$("#folio-invalid").html("Please put 10  digit mobile number");
                //alert('Please put 10  digit mobile number');
               $("#folio-invalid").removeClass("hidden");
               $("#mobile-valid").addClass("hidden");
                return false;
              }
            }
            else {
            //  alert('Not a valid number');
              $("#folio-invalid").removeClass("hidden");
              $("#mobile-valid").addClass("hidden");
              return false;
           }
    
  });
  
});


</script>

</body>
</html>