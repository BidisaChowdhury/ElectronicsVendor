<?php
$orderno=$_GET['orderno'];
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table, th, td {
    padding: 10px;
	border:2px solid black;
}
table {
    border-spacing: 25px;
	
}
</style>
</head>
<body>
<header style="background-color:#555;height:70px">
	<div style="padding-top:10px;font-color:#000000">
		<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
	</div>
</header><br><br><br><br><br>
<center>
<table>
<tr><td><form method='post'><input type="submit" style="height:70px;width:260px;background-color:#ff6600;color:#ffffff;font-size:28px" name="btn1" value="Cash On Delivery"></form></td></tr>
<tr><td><form method='post'><input type="submit" style="height:70px;width:260px;background-color:#000066;color:#ffffff;font-size:32px" name="btn" value="Pay Using Paytm"></form></td></tr>
</table>
</center>
</body>
</html>
<?php
session_start();
if(isset($_POST['btn']))
{
	$orderno=$_GET['orderno'];
	$con=new MySQLi("localhost","root","","electronics");
	$sql="update orders set payment='paytm' where orderno='$orderno'";
	$res=$con->query($sql);
	echo "<script>window.location.href='paytm.php'</script>";
}
else if(isset($_POST['btn1']))
{
	$orderno=$_GET['orderno'];
	$con=new MySQLi("localhost","root","","electronics");
	$sql1="update orders set payment='cash' where orderno='$orderno'";
	$res1=$con->query($sql1);
	echo "<script>alert('Order successfully completed')</script>";
}
?>