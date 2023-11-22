<?php
$orderno=$_GET['orderno'];
$con=new MySQLi("localhost","root","","electronics");
$sql="select * from orders where orderno=$orderno";
$res=$con->query($sql);
$row=$res->fetch_array();
$qty=$row[9];
$modelno=$row[7];
$sql1="select * from mobile where modelno='$modelno'";
$res1=$con->query($sql1);
$row1=$res1->fetch_array();
$tot=$row1[35];
$tot=$tot+$qty;
$sql2="update mobile set qty=$tot where modelno='$modelno'";
$con->query($sql2);
$sql3="delete from orders where orderno=$orderno";
$con->query($sql3);
echo "<script>alert('your order cancelled successfully')</script>";
echo "<script>window.location.href='track.php'</script>";
?>
	