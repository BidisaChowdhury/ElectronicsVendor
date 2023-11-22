<?php
$qty=$_GET['qty'];
$qty1=explode(',',$qty);
$con=new MySQLi("localhost","root","","electronics");
$b=$_COOKIE['browser'];
$sql1="update cart1 set qty=$qty1[1] where bid=$b and modelname='$qty1[0]'";
$con->query($sql1);
echo "<script>window.location.href='cartdetails.php'</script>";
?>