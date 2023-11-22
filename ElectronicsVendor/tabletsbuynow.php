<?php
session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$model=$_GET['model'];
	$con=new MySQLi("localhost","root","","electronics");
	$sql="select * from registration,tablets where cid=$id and modelno='$model'";
	$res=$con->query($sql);
	$row=$res->fetch_array();
}
else
{
	echo "<script> alert('LOG IN OR SIGN UP') </script>";
	echo "<script>window.location.href='index.php'</script>";
}
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
<script>
function valid()
{
	var pin=frm.n3.value
	if(pin=="")
	{
		alert('enter your pincode')
		return false	
	}
	else if(pin.length!=6)
	{
		alert('pincode should be 6 digit')
		return false	
	}
	else if(isNaN(pin))
	{
		alert('enter number only')
		return false	
	}
}
</script>
</head>
<body>
<header style="background-color:#555;height:70px">
<div style="padding-top:10px;font-color:#000000">
	<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
</div>
</header><br>
<center>
<table>
<form method='post' name='frm' onSubmit="return valid()">
<tr><td>Email : </td><td><input type='text' name='n1' value="<?php echo $row[6] ?>" readonly></td></tr>
<tr><td>Enter Delivery Address : </td><td><textarea placeholder="Enter delivery address" name='n2' required></textarea></td></tr>
<tr><td>Pincode : </td><td><input type='text' placeholder="Enter pincode" name='n3' required></td></tr>
<tr><td>Model Name : </td><td><input type='text' name='n4' value="<?php echo $row[10] ?>" readonly></td></tr>
<tr><td>Model No. : </td><td><input type='text' name='n6' value="<?php echo $model ?>" readonly></td></tr>
<tr><td>Price : </td><td><input type='text' name='n7' value="<?php echo $row[30] ?>" readonly></td></tr>
<tr><td>Quantity : </td><td><select name='n5'>
		   <?php
		   for($i=1;$i<=$row[31];$i++)
		   {
			   echo "<option>" .$i. "</option>";
		   }
		   ?>
		   </select></td></tr>
<tr><td><input type="submit" style="height:38px;width:100px" value='BUY' name='btn'></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
	$cid=$_SESSION['id'];
	$email=$_POST['n1'];
	$address=$_POST['n2'];
	$pin=$_POST['n3'];
	$modelname=$_POST['n4'];
	$modelno=$_POST['n6'];
	$price=$_POST['n7'];
	$qty=$_POST['n5'];
	$total=$row[30]*$qty;
	$qty1=$row[31]-$qty;
	$sql1="update tablets set qty=$qty1 where modelno='$model'";
	$con->query($sql1);
	$ono=rand(1,99999);
	$sql2="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$modelname','$modelno',$price,$qty,$total,'null')";
	$con->query($sql2);
	echo "<script>window.location.href='ordersummary.php?model=$row[10]'</script>";
}
?>
	