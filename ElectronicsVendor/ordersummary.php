<?php
	$model=$_GET['model'];
	$con=new MySQLi("localhost","root","","electronics");
	$sql="select * from orders where modelname='$model' and id=(select max(id) from orders)";
	$res=$con->query($sql);
	$row=$res->fetch_array();
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
</header><br>
<center>
<p style="text-align:center;font-weight:700;font-size:30px">ORDER SUMMARY</p>
<table>
<form method='post'>
<tr><td>Email : </td><td><input type='text' value="<?php echo $row[3] ?>" readonly></td></tr>
<tr><td>Enter Delivery Address : </td><td><input type='text' placeholder="Enter delivery address" value="<?php echo $row[4] ?>" readonly></td></tr>
<tr><td>Pincode : </td><td><input type='text' placeholder="Enter pincode" value="<?php echo $row[5] ?>" readonly></td></tr>
<tr><td>Model Name : </td><td><input type='text' value="<?php echo $row[6] ?>" readonly></td></tr>
<tr><td>Price : </td><td><input type='text' value="<?php echo $row[8] ?>" readonly></td></tr>
<tr><td>Quantity : </td><td><input type='text' value="<?php echo $row[9] ?>" readonly></td></tr>
<tr><td>Total : </td><td><input type='text' value="<?php echo $row[10] ?>" readonly></td></tr>
<tr><td><input type="submit"  style="height:40px" value='Proceed to Pay' name='btn'></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
	echo "<script>window.location.href='paymentoption.php?orderno=$row[1]'</script>";
}
?>