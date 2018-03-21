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
		<link rel="stylesheet" type="text/css" href="css/home.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	</head>
	<style>
	
	</style>

<body>
<?php
$servername = "localhost" ;
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "wishlist");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
if(isset($_SESSION['var'])){	
	$user=$_SESSION['var'];
	$_SESSION['count']+=1;
	echo $_SESSION['count'];
	}
else{
		header('Location:index.php');
	}
if(isset($_POST['submitlogout'])){
		session_unset();
		session_destroy();
		header("Location: index.php");
	}	
?>

<div class="container" id="add">
<h3 id="header">ADD DETAILS</h3>
 <button type="button" class="submit" data-toggle="collapse" data-target="#demo">hotel</button>
 <button type="button" class="submit" data-toggle="collapse" data-target="#demo1">shopping</button>

<div id="demo" class="collapse">
	<form action="home.php" method="post">
  <div class="form-group">
    <label>RESTAURANT</label>
    <input type="text" class="form-control input-lg" name="rest" placeholder="Restaurant Name">
  </div>
  <div class="form-group">
    <label>TYPE</label>
    <input type="text" class="form-control input-lg" name="type" placeholder="Type of Restaurant">
  </div>
  <div class="form-group">
    <label>FAMOUS FOR</label>
    <input type="text" class="form-control input-lg" name="famous" placeholder="Signature Dish">
  </div>
  <div class="form-group">
    <label>BUDGET</label>
    <input type="text" class="form-control input-lg" name="budg" placeholder="Budget">
  </div>
  <div class="form-group">
    <label>LOCATION</label>
    <input type="text" class="form-control input-lg" name="rloc" placeholder="Location">
  </div>
  <div class="form-group">
    <label>PRIORITY</label>
  <select class="form-control input-lg" name="rprior">
  <option>Low</option>
  <option>Medium</option>
  <option>High</option>
  </select>
  </div>
  <input type="submit"  class="submit" id="submit" name="restsubmit">
    
</form>
</div>

  <div id="demo1" class="collapse">
	<form action="home.php" method="post">
  <div class="form-group">
    <label>PRODUCT</label>
    <input type="text" class="form-control input-lg" name="product" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label>TYPE</label>
    <input type="text" class="form-control input-lg" name="ptype" placeholder="Type of Product">
  </div>
  <div class="form-group">
    <label>PRICE</label>
    <input type="text" class="form-control input-lg" name="price" placeholder="Price of the Product">
  </div>
  <div class="form-group">
    <label>WHERE TO BUY</label>
    <input type="text" class="form-control input-lg" name="ploc" placeholder="Location">
  </div>
  <div class="form-group">
    <label>PRIORITY</label>
  <select class="form-control input-lg" name="pprior">
  <option>Low</option>
  <option>Medium</option>
  <option>High</option>
  </select>
  </div>
  
   <input type="submit"  class="submit" id="submit" name="shopsubmit">
    </form>
  </div>
  
  
</div>

  <div class="container" >
  <form action="home.php" method='post' class="logout">
	<button name='submitlogout'>Logout</button>
  </form>
  
  
  <!--form action="home.php" method="post">
  <div class="form-group">
    <label>PRODUCT</label>
    <input type="text" class="form-control input-lg" name="product" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label>TYPE</label>
    <input type="text" class="form-control input-lg" name="type" placeholder="Type of Product">
  </div>
  <div class="form-group">
    <label>PRICE</label>
    <input type="text" class="form-control input-lg" name="price" placeholder="Price of the Product">
  </div>
  <div class="form-group">
    <label>PRIORITY</label>
  <select class="form-control input-lg" name="prior">
  <option>Low</option>
  <option>Medium</option>
  <option>High</option>
  </select>
  </div>
  
  <button type="button" class="btn btn-info" name="shsubmit">Submit</button>
    </form-->
  </div>

	
<div>	  
<h1>RESTAURANT DETAILS</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>RESTAURANT</span></th>
        <th><span>TYPE</span></th>
        <th><span>BUDGET</span></th>
        <th><span>LOCATION</span></th>
        <th><span>PRIORITY</span></th>
      </tr>
    </thead>
    <tbody>
	<?php
		//$sql="SELECT * FROM restaurant NATURAL JOIN wish;"
		//$res=$conn->query($sql);
		//while($row=mysqli_fetch_array($sql)){
	?>
		
      <tr>
        <td class="lalign">silly tshirts</td>
        <td>6,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
      <tr>
        <td class="lalign">desktop workspace photos</td>
        <td>2,200</td>
        <td>500</td>
        <td>22%</td>
        <td>8.9</td>
      </tr>
      <tr>
        <td class="lalign">arrested development quotes</td>
        <td>13,500</td>
        <td>900</td>
        <td>6.7%</td>
        <td>12.0</td>
      </tr>
      <tr>
        <td class="lalign">popular web series</td>
        <td>8,700</td>
        <td>350</td>
        <td>4%</td>
        <td>7.0</td>
      </tr>
      <tr>
        <td class="lalign">2013 webapps</td>
        <td>9,900</td>
        <td>460</td>
        <td>4.6%</td>
        <td>11.5</td>
      </tr>
      <tr>
        <td class="lalign">ring bananaphone</td>
        <td>10,500</td>
        <td>748</td>
        <td>7.1%</td>
        <td>17.3</td>
      </tr>
    </tbody>
  </table>
</div>	

<div>	  
<h1>PRODUCT DETAILS</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>PRODUCT</span></th>
        <th><span>TYPE</span></th>
        <th><span>PRICE</span></th>
        <th><span>WHERE TO BUY</span></th>
        <th><span>PRIORITY</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="lalign">silly tshirts</td>
        <td>6,000</td>
        <td>110</td>
        <td>1.8%</td>
        <td>22.2</td>
      </tr>
      <tr>
        <td class="lalign">desktop workspace photos</td>
        <td>2,200</td>
        <td>500</td>
        <td>22%</td>
        <td>8.9</td>
      </tr>
      <tr>
        <td class="lalign">arrested development quotes</td>
        <td>13,500</td>
        <td>900</td>
        <td>6.7%</td>
        <td>12.0</td>
      </tr>
      <tr>
        <td class="lalign">popular web series</td>
        <td>8,700</td>
        <td>350</td>
        <td>4%</td>
        <td>7.0</td>
      </tr>
      <tr>
        <td class="lalign">2013 webapps</td>
        <td>9,900</td>
        <td>460</td>
        <td>4.6%</td>
        <td>11.5</td>
      </tr>
      <tr>
        <td class="lalign">ring bananaphone</td>
        <td>10,500</td>
        <td>748</td>
        <td>7.1%</td>
        <td>17.3</td>
      </tr>
    </tbody>
  </table>		
</div>	
	
	
	
<nav id="bt-menu" class="bt-menu">
	<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
		<ul>
			<li><a href="#" class="bt-icon icon-user-outline">About</a></li>
			<li><a href="#" class="bt-icon icon-sun">Skills</a></li>
			<li><a href="#" class="bt-icon icon-windows">Work</a></li>
			<li><a href="#" class="bt-icon icon-speaker">Blog</a></li>
			<li><a href="#" class="bt-icon icon-star">Clients</a></li>
			<li><a href="home.php" name="submitlogout" class="bt-icon icon-bubble">Logout</a></li>
			
		</ul>
</nav>		

<?php
$rest="";
$type="";
$famous="";
$budg="";
$rloc="";
$rprior="";
$product="";
$ptype="";
$price="";
$ploc="";
$pprior="";
$id="";
$sql = "SELECT * FROM user WHERE username='$user'";
$res = $conn->query($sql);
if($res == TRUE)
{
while ($row = mysqli_fetch_array($res))   
{
$id=$row['userid'];
}
}


if(isset($_POST['restsubmit'])){
if(isset($_POST['rest'])){
	$rest=$_POST['rest'];
}

if(isset($_POST['type'])){
	$type=$_POST['type'];
}

if(isset($_POST['famous'])){
	$famous=$_POST['famous'];
}

if(isset($_POST['budg'])){
	$budg=$_POST['budg'];
}

if(isset($_POST['rloc'])){
	$rloc=$_POST['rloc'];
}
if(isset($_POST['rprior'])){
	$rprior=$_POST['rprior'];
}
$query="INSERT INTO restaurant(resname,type,famous,budget,location,prior) VALUES ('$rest','$type','$famous','$budg','$rloc','$rprior')";
$result=$conn->query($query);

$sql = "SELECT resid FROM restaurant WHERE resname='$rest'";
$res = $conn->query($sql);
if($res == TRUE)
{
while ($row = mysqli_fetch_array($res))   
{
$rid=$row['resid'];
}
}

$sql = "INSERT INTO wish (usrid,wishid) VALUES ('$id','$rid')";
$res=$conn->query($sql);

}
if(isset($_POST['shopsubmit'])){
if(isset($_POST['product'])){
	$product=$_POST['product'];
}

if(isset($_POST['ptype'])){
	$ptype=$_POST['ptype'];
}

if(isset($_POST['price'])){
	$price=$_POST['price'];
}
if(isset($_POST['ploc'])){
	$ploc=$_POST['ploc'];
}

if(isset($_POST['pprior'])){
	$pprior=$_POST['pprior'];
}

$query="INSERT INTO shopping(prodname,type,price,location,prior) VALUES ('$product','$ptype','$price','$ploc','$pprior')";
$result=$conn->query($query);

$sql = "SELECT prodid FROM shopping WHERE prodname='$product'";
$res = $conn->query($sql);
if($res == TRUE)
{
while ($row = mysqli_fetch_array($res))   
{
$pid=$row['prodid'];
}
}

$sql = "INSERT INTO wish (usrid,wishid) VALUES ('$id','$pid')";
$res=$conn->query($sql);

}
?>

</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
	
</html>
