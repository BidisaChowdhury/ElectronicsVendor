<?php
session_start();
if(isset($_SESSION['id']))
{
session_destroy();
echo "<script>alert('Successfully Logged Out')</script>";
echo "<script>window.location.href='product.php'</script>";
}
else
{
	echo "SIGN IN FIRST";
}
?>