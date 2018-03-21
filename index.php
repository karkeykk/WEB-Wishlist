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
session_start();
$_SESSION['count']=1;
?>
<form action="index.php" method="post">
  <header>Login</header>
  <label>Username</label>
  <input type="text" name="name">
  
  <label>Password</label>
  <input type="password" name="pass">
  
  <button name="submit">Login</button>
  
  <p style="margin: -30px 0 10px;"><label>Dont have an account??</label> <button id="submit2" name="submit2">Signup</button></p>
</form>

<?php
$nam="";
$pas="";
if(isset($_POST['submit'])){
if(isset($_POST['name'])){
	$nam=$_POST['name'];
}

if(isset($_POST['pass'])){
	$pas=$_POST['pass'];
}
}
$qry="SELECT * FROM user WHERE username='$nam'";
$a = $conn->query($qry);
$row=mysqli_fetch_array($a);

   if($nam==$row['username'] && $pas==$row['password']) {
		header('Location:home.php');
		$_SESSION['var']=$nam;
   }
   
if(isset($_POST['submit2'])){
	header('Location:signup.php');
}
?>

	

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