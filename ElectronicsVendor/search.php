<style type="text/css">
 table1 {
	  color:#000000;
	  font-weight:900;
	  width:700px;
	  height:100px;
}
tr
{
	background-color: #ffffff;
}
td :hover
{
	text-decoration:underline;
	color:#0033cc;
	font-style:italic;
	font-weight:500;
	font-size:16px;
}

td{
	padding:5px;
	color:#000000;
}
</style>
<?php
$mb=$_GET['q'];
$con=new MySQLi("localhost","root","","electronics");
$sql="select * from mobile where modelname like '$mb%'";
$res=$con->query($sql);
echo "<table class='table1'>";
while($rows = $res->fetch_array())
{
	   echo "<tr>";
	   echo "<td><a href='mobilespecification.php?id=$rows[0]'>".$rows[2]."</td>";
	   echo "</tr>";
}
$sql1="select * from laptop where modelname like '$mb%'";
$res1=$con->query($sql1);
while($rows = $res1->fetch_array())
{
		echo "<tr>";
		echo "<td><a href='laptopspecification.php?id=$rows[0]'>".$rows[1]."</td>";
		echo "</tr>";
}
$sql2="select * from tablets where modelname like '$mb%'";
$res2=$con->query($sql2);
		  while($rows = $res2->fetch_array())
          {
			   echo "<tr>";
			   echo "<td><a href='tabletsspecification.php?id=$rows[0]'>".$rows[2]."</td>";
			   echo "</tr>";
		 }
$sql3="select * from tv where modelname like '$mb%'";
$res3=$con->query($sql3);
		  while($rows = $res3->fetch_array())
          {
			   echo "<tr>";
			   echo "<td><a href='tvspecification.php?id=$rows[0]'>".$rows[2]."</td>";
			   echo "</tr>";
		 }
$sql4="select * from refrigerator where modelname like '$mb%'";
$res4=$con->query($sql4);
		  while($rows = $res4->fetch_array())
          {
			   echo "<tr>";
			   echo "<td><a href='refrigeratorspecification.php?id=$rows[0]'>".$rows[1]."</td>";
			   echo "</tr>";
		 }
$sql5="select * from ac where modelname like '$mb%'";
$res5=$con->query($sql5);
		  while($rows = $res5->fetch_array())
          {
			   echo "<tr>";
			   echo "<td><a href='acspecification.php?id=$rows[0]'>".$rows[1]."</td>";
			   echo "</tr>";
		 }
			  echo "</table>";
 ?>