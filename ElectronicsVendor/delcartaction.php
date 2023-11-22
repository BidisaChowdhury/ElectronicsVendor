<?php
	if(isset($_COOKIE['browser']))
	{
			$b=$_COOKIE['browser'];
			$model=$_GET['model'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="delete from cart1 where bid=$b and modelname='$model'";
			$con->query($sql);
			echo "<script>window.location.href='cartdetails.php'</script>";
	}
?>