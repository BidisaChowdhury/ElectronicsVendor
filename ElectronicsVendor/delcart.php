<?php
$cookie_name="user";
$c=0;
if(isset($_COOKIE[$cookie_name]))
{
	$c=$_COOKIE[$cookie_name]-1;
	setcookie($cookie_name,$c,time()+(100));
}	
	$model=$_GET['model'];
	echo "<script>window.location.href='delcartaction.php?model=$model'</script>";
?>
