
<?php
$user = 'root';
$password = '';
$database = 'pooja';
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "SELECT * FROM transcation  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="script.js"></script>
    <script src="js/jquery-min-jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
			width : 80%;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #F0FFFF;
			border: 1px solid black;
		}

		th,td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		th{
			background-color: #DCDCDC ;
		}

		td {
			font-weight: lighter;
		}
        #van{
        margin-top: 100px;
        padding: 50px;

        }
	</style>
</head>

<body>

      
	<section>
		<h1 id="van">TRANSACTION HISTORY</h1>
		<table>
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Transfer Amount</th>
			</tr>
	<div class="container">
    	<nav class="navbar navbar-inverse navbar-fixed-top " >
			<div class="container-fluid " style="background-color: #ADEFD1FF">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color:#00203FFF " >TSF BANK</a>
			  </div>
			  <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" >
				  <li ><a href="home.html" style="color:#00203FFF">Home</a></li>
				  <li><a href="customer.html"style="color: #00203FFF">Customer List</a></li>
				  <li><a href="transfermoney.html" style="color: #00203FFF">Transfer Money</a></li>
				  <li class="active"><a href="transactionlist.php" style="color: #ADEFD1FF" >Transaction History</a></li>
				</ul>
			  </div>
			</div>
		</nav>
		  
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['customername'];?></td>
				<td><?php echo $rows['amount'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
