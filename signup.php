<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Animated Border Menus</title>
		<meta name="description" content="Responsive Animated Border Menus with CSS Transitions" />
		<meta name="keywords" content="navigation, menu, responsive, border, overlay, css transition" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/signup.css" />
		
		<script src="js/modernizr.custom.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</head>
	


<body>
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "wishlist");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<form action="signup.php" method="post">
  <header>Signup</header>
  <label>Email</label>
  <input type="email" name="email">
  
  <label>Username</label>
  <input type="text" name="name">
  
  <label>Password</label>
  <input type="password" name="pass">
  
  <label>Confirm Password</label>
  <input type="password" name="conf">
  
  <input type="submit"  class="submit" id="submit" name="submit">
</form>

	
<?php
$em="";
$nam="";
$pas="";
$cnf="";
if(isset($_POST['submit'])){
if(isset($_POST['email'])){
	$em=$_POST['email'];
}

if(isset($_POST['name'])){
	$nam=$_POST['name'];
}

if(isset($_POST['pass'])){
	$pas=$_POST['pass'];
}

if(isset($_POST['conf'])){
	$cnf=$_POST['conf'];
}

if($pas == $cnf){
$sql = "INSERT INTO user(username,password,email) VALUES('$nam','$pas','$em')";
$result = $conn->query($sql);
if ( $result == TRUE) {
	session_start();
	$_SESSION['var']='$nam';
	header('Location:home.php');
}
}
}
?>
	
	
	
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	<nav id="bt-menu" class="bt-menu">
				<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a href="#" class="bt-icon icon-user-outline">About</a></li>
					<li><a href="#" class="bt-icon icon-sun">Skills</a></li>
					<li><a href="#" class="bt-icon icon-windows">Work</a></li>
					<li><a href="#" class="bt-icon icon-speaker">Blog</a></li>
					<li><a href="#" class="bt-icon icon-star">Clients</a></li>
					<li><a href="#" class="bt-icon icon-bubble">Contact</a></li>
				</ul>
			</nav>
		</div><!-- /container -->
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
	
</html>