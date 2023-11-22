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
a{
	text-decoration:none;
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
<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		$id=$_SESSION['id'];
		$con=new MySQLi("localhost","root","","electronics");
		$sql="select * from orders where cid='$id'";
		$res=$con->query($sql);
		$c=$res->num_rows;
		if($c>=1)
		{
			echo "<table border='2'>";
			echo "<tr><td>Order No. </td><td>Model Name </td><td>Price </td><td>Quantity </td><td>Total </td><td>Action</td></tr>";
			while($row=$res->fetch_array())
			{
				echo "<tr><td>".$row[1]."</td><td>" .$row[6]."</td><td>&#8377;" .$row[8]."</td><td>" .$row[9]."</td><td>&#8377;" .$row[10]. "</td><td><a href='delete.php?orderno=$row[1]'>Cancel Order </a></td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<p style='font-size:32px'>You have not ordered anything</p>";
		}
	}
?>
</center>
</body>
</html>
