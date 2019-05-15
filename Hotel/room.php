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
 <div class="panel-heading"><h2>Book Now(Rooms)</h2></div>
    <div class="panel-body">
    
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fn">Check in:</label>
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
         <label class="control-label col-sm-2" for="ln2">Room ID:</label>
         <div class="col-sm-3">
           <select class="form-control" id="type">
      	<option>---Select Room---</option>
        <option>Ro-1</option>
        <option>Ro-2</option>
        <option>Ro-3</option>
        <option>Ro-4</option>
        <option>Ro-5</option>
        <option>Ro-6</option>
        <option>Ro-7</option>
        <option>Ro-8</option>
        <option>Ro-9</option>
        <option>Ro-10</option>
        <option>Ro-11</option>
        <option>Ro-12</option>
        <option>Ro-13</option>
        <option>Ro-14</option>
        <option>Ro-15</option>
        <option>Ro-16</option>
        <option>Ro-17</option>
        <option>Ro-18</option>
        <option>Ro-19</option>
        <option>Ro-20</option>
        <option>Ro-21</option>
        <option>Ro-22</option>
        <option>Ro-23</option>
        <option>Ro-24</option>
        <option>Ro-25</option>
        <option>Ro-26</option>
        <option>Ro-27</option>
        <option>Ro-28</option>
        <option>Ro-29</option>
        <option>Ro-30</option>
        <option>Ro-31</option>
        <option>Ro-32</option>
        <option>Ro-33</option>
        <option>Ro-34</option>
        <option>Ro-35</option>
        <option>Ro-36</option>
        <option>Ro-37</option>
        <option>Ro-38</option>
        <option>Ro-39</option>
        <option>Ro-40</option>
        <option>Ro-41</option>
        <option>Ro-42</option>
        <option>Ro-43</option>
        <option>Ro-44</option>
        <option>Ro-45</option>
        <option>Ro-46</option>
        <option>Ro-47</option>
        <option>Ro-48</option>
        <option>Ro-49</option>
        <option>Ro-50</option>
        
      </select>
        
      </div></div>
    
    
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
      <div class="form-group">
      <label class="control-label col-sm-2" for="fn2">Room Condition</label>
      <div class="col-sm-3">
        
      <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>AC</option>
        <option>Non-AC</option>
      </select>
  </div>
      </div>
       <div class="form-group">
         <label class="control-label col-sm-2" for="ln2">Adults:</label>
         <div class="col-sm-3">
           <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        
      </select>
        
      </div></div>
        <label class="control-label col-sm-2" for="fn">Children:</label>
      <div class="col-sm-3">
        <select class="form-control" id="type">
      	<option>---Select one---</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        
      </select>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <br><br>
        <a href="reservation.php" class="btn btn-info" role="button">Submit</a>
      </div>
    </div>
  </form>
</div>

</body>
</html> 