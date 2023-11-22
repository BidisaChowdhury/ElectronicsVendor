<?php
$mb=$_GET['q'];
$con=new MySQLi("localhost","root","","electronics");
$sql="select * from mobile where modelname like '$mb%'";
$res=$con->query($sql);
while($rows = $res->fetch_array())
{
	   echo "<script>window.location.href='mobilespecification.php?id=$rows[0]'</script>";
}
$sql1="select * from laptop where modelname like '$mb%'";
$res1=$con->query($sql1);
while($rows = $res1->fetch_array())
{
		echo "<script>window.location.href='laptopspecification.php?id=$rows[0]'</script>";
}
$sql2="select * from tablets where modelname like '$mb%'";
$res2=$con->query($sql2);
while($rows = $res2->fetch_array())
{
		echo "<script>window.location.href='tabletsspecification.php?id=$rows[0]'</script>";
}
$sql3="select * from tv where modelname like '$mb%'";
$res3=$con->query($sql3);
while($rows = $res3->fetch_array())
{
		echo "<script>window.location.href='tvspecification.php?id=$rows[0]'</script>";
}
$sql4="select * from refrigerator where modelname like '$mb%'";
$res4=$con->query($sql4);
while($rows = $res4->fetch_array())
{
		echo "<script>window.location.href='refrigeratorspecification.php?id=$rows[0]'</script>";
}
$sql5="select * from ac where modelname like '$mb%'";
$res5=$con->query($sql5);
while($rows = $res5->fetch_array())
{
		echo "<script>window.location.href='acspecification.php?id=$rows[0]'</script>";
}
$sql6="select * from wear where modelname like '$mb%'";
$res6=$con->query($sql6);
while($rows = $res6->fetch_array())
{
		echo "<script>window.location.href='wearspecification.php?id=$rows[0]'</script>";
}
$sql7="select * from watches where modelname like '$mb%'";
$res7=$con->query($sql7);
while($rows = $res7->fetch_array())
{
		echo "<script>window.location.href='watchesspecification.php?id=$rows[0]'</script>";
}
$sql8="select * from grocery where modelname like '$mb%'";
$res8=$con->query($sql8);
while($rows = $res8->fetch_array())
{
		echo "<script>window.location.href='groceryspecification.php?id=$rows[0]'</script>";
}
$sql9="select * from books where bookname like '$mb%'";
$res9=$con->query($sql9);
while($rows = $res9->fetch_array())
{
		echo "<script>window.location.href='booksspecification.php?id=$rows[0]'</script>";
}
?>