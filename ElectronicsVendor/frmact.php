<?php
$name=$_POST['n1'];
$address=$_POST['n2'];
$pin=$_POST['n10'];
$state=$_POST['n3'];
$mobile=$_POST['n9'];
$email=$_POST['n6'];
$password=$_POST['n7'];
$con=new MySQLi("localhost","root","","electronics");
$sql="select * from registration where email='$email' or mobile='$mobile' ";
$res=$con->query($sql);
$c=$res->num_rows;
if($c>=1)
{
	echo "<script>alert('email or mobile already registered')</script>";
	echo "<script>window.location.href='login.php'</script>";
}
else
{
	$sql1="insert into registration values(null,'$name','$address','$pin','$state','$mobile','$email','$password')";
	$con->query($sql1);
	echo "<script>alert('SUCCESSFULLY REGISTERED')</script>";
	echo "<script>window.location.href='product.php'</script>";
}
?>