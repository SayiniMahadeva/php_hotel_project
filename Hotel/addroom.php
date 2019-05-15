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
       
        <li><a href="contactus.php">Contact Us</a></li> 
        <li><a href="login.php">Logout</a></li> 
      </li>

    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><h2>Add New Room</h2></div>
    <div class="panel-body">

  
  <form class="form-horizontal" action="new.php" method="post">
    <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Room ID:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="fn" name="fn" data-validation="required">
      </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">Room Type:</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>Single</option>
        <option>Double</option>
        <option>Family Delux</option>
        
      </select>
  </div></div>
    <div>
        <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="ln">Maximum No of  Member:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="addr" name="add" data-validation="required">
      </div>
      </div>
       <div class="form-group row 	col-sm-10">
      <label class="control-label col-sm-2" for="fn">Descrption:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="una" name="un" data-validation="required">
      </div></div>
   
       
       <div class="form-group row col-sm-10">
      <label class="control-label col-sm-2" for="fn">Cost:</label>
  

    </div>
    <div class="form-group row col-sm-10">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Add to the Database</button>
      </div>
    </div>
  </form></div></div>
</div>
<?php 
$con=mysqli_connect("localhost","root","","hotel") or die('site is under construction');

if(isset($_POST['submit'])){
	$firstName=$_POST['fn'];
	$lastName=$_POST['ln'];
	$address=$_POST['add'];
	$userName=$_POST['un'];
	$password=$_POST['pwd'];
	$confirmpassword=$_POST['conp'];
	$contactNo=$_POST['cn'];
	$email=$_POST['email'];
	

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["fn"]);
    $laststname = test_input($_POST["ln"]);
	  $address = test_input($_POST["add"]);
	


  
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if($password==$confirmpassword){
		
	$password=md5($password);
	$queary="INSERT INTO `hotel`.`customer` (`FirstName`, `Address`, `Email`, `UserName`, `Password`, `LastName`) VALUES ( '{$firstName}', '{$address}', '{$email}', '{$userName}', '{$password}', '{$lastName}');";

	
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