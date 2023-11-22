<?php
	if(isset($_COOKIE['browser']))
	{
		$b=$_COOKIE['browser'];
		$model=$_GET['model'];
		$con=new MySQLi("localhost","root","","electronics");
		$bu=rand(1,9999);
		$sql="insert into cart1 values(null,'$model',$b,1)";
		$con->query($sql);
		echo "<script>window.location.href='cartdetails.php'</script>";
	}
?>