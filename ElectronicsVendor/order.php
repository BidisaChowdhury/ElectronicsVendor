<?php
session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];
	$con=new MySQLi("localhost","root","","electronics");
	$sql="select * from registration where cid=$id";
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
</head>
<body>
<header style="background-color:#555;height:70px">
<div style="padding-top:10px;font-color:#000000">
	<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
</div>
</header><br>
<center>
<table>
<form method='post'>
<tr><td>Email : </td><td><input type='text' name='n1' value="<?php echo $row[6] ?>" readonly></td></tr>
<tr><td>Enter Delivery Address : </td><td><textarea placeholder="Enter delivery address" name='n2' required></textarea></td></tr>
<tr><td>Pincode : </td><td><input type='text' placeholder="Enter pincode" name='n3' required></td></tr>
<tr><td>Model Name : </td><td><textarea style='width:185px'>
<?php
	if(isset($_COOKIE['user']))
	{
		$b=$_COOKIE['browser'];
		$con=new MySQLi("localhost","root","","electronics");
		$sql="select *  from cart1 where bid=$b";
		$res=$con->query($sql);
		$c=$res->num_rows;
		if($c>=1)
		{
			while($row=$res->fetch_array())
			{
					$model=$row[1];
					echo $model."&#13;&#13;" ;
			}
		}
	}
?>
</textarea></td></tr>
<tr><td><input type="submit" style="height:38px;width:100px" value='BUY' name='btn'></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php
if(isset($_COOKIE['user']))
{
		$b=$_COOKIE['browser'];
		if(isset($_POST['btn']))
		{
			$cid=$_SESSION['id'];
			$email=$_POST['n1'];
			$address=$_POST['n2'];
			$pin=$_POST['n3'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="select *  from cart1 where bid=$b";
			$res=$con->query($sql);
			$c=$res->num_rows;
			if($c>=1)
			{
				$ono=rand(1,99999);
				while($row=$res->fetch_array())
				{
					$model=$row[1];
					$qty=$row[3];
					$sql1="select *  from mobile where modelname='$model'";
					$res1=$con->query($sql1);
					$c1=$res1->num_rows;
					if($c1>=1)
					{
							$row1=$res1->fetch_array();
							$price1=$row1[4];
							$modelno1=$row1[6];
							$qty1=$row1[35]-$qty;
							$total=$price1*$qty;
							$sql2="update mobile set qty=$qty1 where modelname='$model'";
							$con->query($sql2);
							$sql3="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno1',$price1,$qty,$total,'null')";
							$con->query($sql3);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql4="select *  from tablets where modelname='$model'";
					$res4=$con->query($sql4);
					$c2=$res4->num_rows;
					if($c2>=1)
					{
							$row4=$res4->fetch_array();
							$price2=$row4[22];
							$modelno2=$row4[1];
							$qty4=$row4[23]-$qty;
							$total=$row4[22]*$qty;
							$sql5="update tablets set qty=$qty4 where modelname='$model'";
							$con->query($sql5);
							$sql6="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno2',$price2,$qty,$total,'null')";
							$con->query($sql6);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql7="select *  from laptop where modelname='$model'";
					$res7=$con->query($sql7);
					$c3=$res7->num_rows;
					if($c3>=1)
					{
							$row7=$res7->fetch_array();
							$price3=$row7[19];
							$modelno3=$row7[2];
							$qty7=$row7[20]-$qty;
							$total=$row7[19]*$qty;
							$sql8="update laptop set qty=$qty7 where modelname='$model'";
							$con->query($sql8);
							$sql9="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno3',$price3,$qty,$total,'null')";
							$con->query($sql9);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql10="select *  from tv where modelname='$model'";
					$res10=$con->query($sql10);
					$c4=$res10->num_rows;
					if($c4>=1)
					{
							$row10=$res10->fetch_array();
							$price4=$row10[10];
							$modelno4=$row10[1];
							$qty10=$row10[11]-$qty;
							$total=$row10[10]*$qty;
							$sql11="update tv set qty=$qty10 where modelname='$model'";
							$con->query($sql11);
							$sql12="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno4',$price4,$qty,$total,'null')";
							$con->query($sql12);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql13="select *  from refrigerator where modelname='$model'";
					$res13=$con->query($sql13);
					$c5=$res13->num_rows;
					if($c5>=1)
					{
							$row13=$res13->fetch_array();
							$price5=$row13[13];
							$modelno5=$row13[2];
							$qty13=$row13[14]-$qty;
							$total=$row13[13]*$qty;
							$sql14="update refrigerator set qty=$qty13 where modelname='$model'";
							$con->query($sql14);
							$sql15="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno5',$price5,$qty,$total,'null')";
							$con->query($sql15);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql16="select *  from ac where modelname='$model'";
					$res16=$con->query($sql16);
					$c6=$res16->num_rows;
					if($c6>=1)
					{
							$row16=$res16->fetch_array();
							$price6=$row16[10];
							$qty16=$row16[11]-$qty;
							$total=$row16[10]*$qty;
							$sql17="update ac set qty=$qty16 where modelname='$model'";
							$con->query($sql17);
							$sql18="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','null',$price6,$qty,$total,'null')";
							$con->query($sql18);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql19="select *  from watches where modelname='$model'";
					$res19=$con->query($sql19);
					$c7=$res19->num_rows;
					if($c7>=1)
					{
							$row19=$res19->fetch_array();
							$price7=$row19[9];
							$modelno7=$row19[1];
							$qty19=$row19[10]-$qty;
							$total=$row19[9]*$qty;
							$sql20="update watches set qty=$qty19 where modelname='$model'";
							$con->query($sql20);
							$sql21="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno7',$price7,$qty,$total,'null')";
							$con->query($sql21);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql22="select *  from wear where modelname='$model'";
					$res22=$con->query($sql22);
					$c8=$res22->num_rows;
					if($c8>=1)
					{
							$row22=$res22->fetch_array();
							$price8=$row22[9];
							$modelno8=$row22[1];
							$qty22=$row22[10]-$qty;
							$total=$row22[9]*$qty;
							$sql23="update wear set qty=$qty22 where modelname='$model'";
							$con->query($sql23);
							$sql24="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','$modelno8',$price8,$qty,$total,'null')";
							$con->query($sql24);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql25="select *  from grocery where modelname='$model'";
					$res25=$con->query($sql25);
					$c9=$res25->num_rows;
					if($c9>=1)
					{
							$row25=$res25->fetch_array();
							$price9=$row25[7];
							$qty25=$row25[9]-$qty;
							$total=$row25[7]*$qty;
							$sql26="update grocery set qty=$qty25 where modelname='$model'";
							$con->query($sql26);
							$sql27="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','null',$price9,$qty,$total,'null')";
							$con->query($sql27);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
					$sql28="select *  from books where bookname='$model'";
					$res28=$con->query($sql28);
					$c10=$res28->num_rows;
					if($c10>=1)
					{
							$row28=$res28->fetch_array();
							$price10=$row28[8];
							$qty28=$row28[9]-$qty;
							$total=$row28[8]*$qty;
							$sql29="update books set qty=$qty28 where modelname='$model'";
							$con->query($sql29);
							$sql30="insert into orders values(null,$ono,$cid,'$email','$address','$pin','$model','null',$price10,$qty,$total,'null')";
							$con->query($sql30);
							echo "<script>window.location.href='summary.php?model=$model'</script>";
					}
				}
			}
		}
}
?>