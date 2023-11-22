<?php
session_start();
if(isset($_COOKIE['user']))
{
		$b=$_COOKIE['browser'];
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="select * from orders where cid=$id and id=(select max(id) from orders)";
			$res=$con->query($sql);
			$row=$res->fetch_array();
		}
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
<tr><td>Enter Delivery Address : </td><td><input type='text' placeholder="Delivery address" value="<?php echo $row[4] ?>" readonly></td></tr>
<tr><td>Pincode : </td><td><input type='text' placeholder="Pincode" value="<?php echo $row[5] ?>" readonly></td></tr>
<tr><td>Model Name : </td><td><textarea style='width:185px'>
<?php
	if(isset($_COOKIE['user']))
	{
		$b=$_COOKIE['browser'];
		$total=0;
		$con=new MySQLi("localhost","root","","electronics");
		$sql="select *  from cart1 where bid=$b";
		$res=$con->query($sql);
		$c=$res->num_rows;
		if($c>=1)
		{
			while($row=$res->fetch_array())
			{
					$model=$row[1];
					$qty=$row[3];
					echo $model."&#13;" ;
					$sql1="select *  from mobile where modelname='$model'";
					$res1=$con->query($sql1);
					$c1=$res1->num_rows;
					if($c1>=1)
					{
							$row1=$res1->fetch_array();
							$total=$total+($row1[4]*$qty);
					}
					$sql2="select *  from tablets where modelname='$model'";
					$res2=$con->query($sql2);
					$c2=$res2->num_rows;
					if($c2>=1)
					{
							$row2=$res2->fetch_array();
							$total=$total+($row2[22]*$qty);
					}
					$sql3="select *  from laptop where modelname='$model'";
					$res3=$con->query($sql3);
					$c3=$res3->num_rows;
					if($c3>=1)
					{
							$row3=$res3->fetch_array();
							$total=$total+($row3[19]*$qty);
					}
					$sql4="select *  from tv where modelname='$model'";
					$res4=$con->query($sql4);
					$c4=$res4->num_rows;
					if($c4>=1)
					{
							$row4=$res4->fetch_array();
							$total=$total+($row4[10]*$qty);
					}
					$sql5="select *  from refrigerator where modelname='$model'";
					$res5=$con->query($sql5);
					$c5=$res5->num_rows;
					if($c5>=1)
					{
							$row5=$res5->fetch_array();
							$total=$total+($row5[13]*$qty);
					}
					$sql6="select *  from ac where modelname='$model'";
					$res6=$con->query($sql6);
					$c6=$res6->num_rows;
					if($c6>=1)
					{
							$row6=$res6->fetch_array();
							$total=$total+($row6[10]*$qty);
					}
					$sql7="select *  from watches where modelname='$model'";
					$res7=$con->query($sql7);
					$c7=$res7->num_rows;
					if($c7>=1)
					{
							$row7=$res7->fetch_array();
							$total=$total+($row7[9]*$qty);
					}
					$sql8="select *  from wear where modelname='$model'";
					$res8=$con->query($sql8);
					$c8=$res8->num_rows;
					if($c8>=1)
					{
							$row8=$res8->fetch_array();
							$total=$total+($row8[9]*$qty);
					}
					$sql9="select *  from grocery where modelname='$model'";
					$res9=$con->query($sql9);
					$c9=$res9->num_rows;
					if($c9>=1)
					{
							$row9=$res9->fetch_array();
							$total=$total+($row9[7]*$qty);
					}
					$sql10="select *  from books where bookname='$model'";
					$res10=$con->query($sql10);
					$c10=$res10->num_rows;
					if($c10>=1)
					{
							$row10=$res10->fetch_array();
							$total=$total+($row10[8]*$qty);
					}
			}
		}
	}
?>
</textarea></td></tr>
<tr><td>Total : </td><td><input type='text' value="<?php echo $total ?>" readonly></td></tr>
<tr><td><input type="submit" style="height:38px;width:100px" value='BUY' name='btn'></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$sql20="select * from orders where cid=$id and id=(select max(id) from orders)";
			$res20=$con->query($sql20);
			$row20=$res20->fetch_array();
			$orderno=$row20[1];
			echo "<script>window.location.href='paymentoption.php?orderno=$orderno'</script>";
		}
	
}
?>