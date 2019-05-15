<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
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
                   
                    <li><a href="contactus.php">Contact Us</a></li> 
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>User Login</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="login.php" method="post" >
                        <div class="form-group row col-sm-7">
                            <label class="control-label col-sm-3" for="fn2" >User Type:</label>
                            <div class="col-sm-4">

                                <select class="form-control" id="type" name="utype">
                                    <option value="">---Select User Type---</option>
                                    <option value="admin">Administrator</option>
                                    <option value="cus">Customer</option>
                                    <option value="recp">Receptionist</option>


                                </select>
                            </div></div>

                        <div class="col-sm-6">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input id="email" type="text" class="form-control" name="username" placeholder="Username">
                            </div><br><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
               <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div><br>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <p align=center>If you not register.<a href="new.php">Register now</a>.</p>


                </div>

                <?php
                $con = mysqli_connect("localhost", "root", "", "hotel") or die('site is under construction');
                if (isset($_POST['submit'])) {


                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $usertype = $_POST['utype'];
                    $dbpassword;
                    $dbusername;

                    if ($username && $password && $usertype) {
                        if ($usertype == "cus") {

                            $query = mysqli_query($con, "SELECT * FROM customer WHERE UserName='$username'");
                            $numrows = mysqli_num_rows($query);

                            if ($numrows == 0) {

                                echo '<div class="alert alert-warning fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>User does not exist..!</strong> 
  </div>';
                            } else {
                                while ($row = mysqli_fetch_assoc($query)) {
                                    $dbusername = $row['UserName'];
                                    $dbpassword = $row['Password'];
                                    // $usertype = $row['Usertype'];
                                }

                                if ($username == $dbusername && md5($password) == $dbpassword) {
                                    $header = header('Location:index.php');
                                   // exit();
                                } else {

                                    echo '<div class="alert alert-warning fade in">
    							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   								<strong>Password is incorrect..!</strong> 
 							 </div>';
                                }
                            }
                        } else {
                            $query = mysqli_query($con, "SELECT * FROM tbl_user WHERE username='$username2'");
                            $numrows = mysqli_num_rows($query);

                            if ($numrows == 0) {

                                echo '<div class="alert alert-warning fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>User does not exist..!</strong> 
  </div>';
                            } else {
                                while ($row = mysqli_fetch_assoc($query)) {
                                    $dbusername = $row['username'];
                                    $dbpassword = $row['password'];
                                    $usertype = $row['Usertype'];
                                }

                                if ($username == $dbusername && $password == $dbpassword) {
                                    session_start();
                                    $_SESSION['utype'] = $usertype;
                                    $_SESSION['uname'] = $dbusername;
                                    $_SESSION['password'] = $dbpassword;

                                    header('Location:index.php');
                                } else {

                                    echo '<div class="alert alert-warning fade in">
    							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   								<strong>Password is incorrect..!</strong> 
 							 </div>';
                                }
                            }
                        }
                    } else {

                        die("Please Enter correct Username and password..!");
                    }
                }
                ?> 

                </body>
                </html>
