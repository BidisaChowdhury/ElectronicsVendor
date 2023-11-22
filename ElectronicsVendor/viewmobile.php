<style>
div.gallery1 {
    float:left;
    width: 250px;
}
div.gallery1 img {
    width: 205px;
    height:280px;
	padding-left:58px;
}
div.gallery1 img:hover {
    width: 215px;
	height:280px;
	overflow:hidden;
}
div.desc1 {
    padding: 15px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery2 {
    margin:8px;
    width: 310px;
	height:340px;
	float:left;
}
div.gallery2 img {
    width: 295px;
    height:200px;
	padding:2px;
}
div.gallery2 img:hover {
    width: 305px;
	height:200px;
	overflow:hidden;
}

div.desc2 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery3 {
    margin: 25px;
    width: 260px;
	height:500px;
	float:left;
}
div.gallery3 img {
    width: 230px;
    height:400px;
	padding-left:10px;
}
div.gallery3 img:hover {
    width: 240px;
	height:400px;
	overflow:hidden;
}

div.desc3 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery4 {
    margin: 15px;
    width: 320px;
	float:left;
}
div.gallery4 img {
    width: 295px;
    height:220px;
	
}
div.gallery4 img:hover {
    width: 300px;
	height:220px;
	overflow:hidden;
}

div.desc4 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery5 {
    margin: 40px;
    width: 240px;
	float:left;
}
div.gallery5 img {
    width: 200px;
    height:430px;
	
}
div.gallery5 img:hover {
    width: 215px;
	height:430px;
	overflow:hidden;
}

div.desc5 {
    padding: 8px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery6 {
    margin: 5px;
    width: 340px;
	float:left;
}
div.gallery6 img {
    width: 338px;
    height:120px;
}
div.gallery6 img:hover {
    width: 345px;
	height:120px;
	overflow:hidden;
}

div.desc6 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery9 {
    margin: 5px;
    float:left;
    width: 250px;
	height:500px;
}
div.gallery10 {
    margin: 15px;
    float:left;
    width: 220px;
	height:300px;
}
div.gallery9 img {
    width: 235px;
    height:360px;
	padding-left:28px;
}
div.gallery10 img {
    width: 160px;
    height:250px;
	padding-left:38px;
}

div.gallery9 img:hover {
    width: 245px;
	height:360px;
	overflow:hidden;
}
div.gallery10 img:hover {
    width: 190px;
	height:250px;
	overflow:hidden;
}

div.desc9 {
    padding: 2px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery7 {
    margin: 15px;
    float:left;
    max-width:290px;
	height:400px;
	vertical-align:top;
}
div.gallery7 img {
    width: 240px;
    height:270px;
	padding-left:30px;
	padding-right:1px;
}
div.gallery7 img:hover {
    width: 245px;
	overflow:hidden;
}

div.desc7 {
    padding: 15px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
div.gallery8 {
    margin: 22px;
    width: 300px;
	float:left;
}
div.gallery8 img {
    width: 290px;
    height:360px;
	
}
div.gallery8 img:hover {
    width: 295px;
	height:360px;
	overflow:hidden;
}

div.desc8 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
</style>
<?php
$mb=$_GET['q'];
$con=new MySQLi("localhost","root","","electronics");
echo "<ul style='list-style-type:none;padding-left:45px'>";
if($mb=='mobile')
{
$sql1="select * from mobile order by modelname ";
$res1=$con->query($sql1);
while($row1 = $res1->fetch_array())
{
	echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row1[0]'><img src='".$row1[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row1[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row1[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row1[4]."</p></div></a></div></li>";
}
}
else if($mb=='laptop')
{
	$sql2="select * from laptop order by modelname ";
	$res2=$con->query($sql2);
	while($row2 = $res2->fetch_array())
	{
	echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row2[0]'><img src='".$row2[3]."'><div class='desc2'><p style='font-weight:900;font-size:14px'>".$row2[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row2[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row2[19]."</p></div></a></div></li>";
	}
}
else if($mb=='tablets')
{
	$sql3="select * from tablets order by color";
	$res3=$con->query($sql3);
	while($row3=$res3->fetch_array())
	{
		echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row3[0]'><img src='".$row3[3]."'><div class='desc3'><p style='font-weight:900;font-size:14px'>".$row3[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row3[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row3[22]."</p></div></a></div></li>";
    }
}
else if($mb=='tv')
{
	$sql4="select * from tv order by modelname";
	$res4=$con->query($sql4);
	while($row4=$res4->fetch_array())
	{
		echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row4[0]'><img src='".$row4[4]."'><div class='desc4'><p style='font-weight:900;font-size:14px'>".$row4[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row4[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row4[10]."</p></div></a></div></li>";
    }
}
else if($mb=='refrigerator')
{
	$sql5="select * from refrigerator";
	$res5=$con->query($sql5);
	while($row5=$res5->fetch_array())
	{
		echo "<li><div class='gallery5'><a href='refrigeratorspecification.php?id=$row5[0]'><img src='".$row5[5]."'><div class='desc5'><p style='font-weight:900;font-size:14px'>".$row5[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row5[12]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row5[13]."</p></div></a></div></li>";
    }
}
else if($mb=='ac')
{
	$sql6="select * from ac";
	$res6=$con->query($sql6);
	while($row6=$res6->fetch_array())
	{
		echo "<li><div class='gallery6'><a href='acspecification.php?id=$row6[0]'><img src='".$row6[3]."'><div class='desc6'><p style='font-weight:900;font-size:14px'>".$row6[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row6[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row6[10]."</p></div></a></div></li>";
    }
}
else if($mb=='men')
{
	$sql="select * from wear where gender='M'";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery9'><a href='wearspecification.php?id=$row[0]'><img src='".$row[3]."'><div class='desc9'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
    }
	$sql="select * from watches where gender='M'";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:2px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery10'><a href='watchesspecification.php?id=$row[0]'><img src='".$row[4]."'><div class='desc9'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377 ".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
    }
}
else if($mb=='women')
{
	$sql="select * from wear where gender='F'";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	$count=0;
	while($row=$res->fetch_array())
	{
		if($count<8)
		{
			echo "<li><div class='gallery9'><a href='wearspecification.php?id=$row[0]'><img src='".$row[3]."'><div class='desc9'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
		}
		$count++;
    }
	$sql="select * from watches where gender='F'";
	$res=$con->query($sql);
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery10'><a href='watchesspecification.php?id=$row[0]'><img src='".$row[4]."'><div class='desc9'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377 ".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
    }
}
else if($mb=='grocery')
{
	$sql="select * from grocery order by price";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:25px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery7'><a href='groceryspecification.php?id=$row[0]'><img src='".$row[8]."'><div class='desc7'><p style='font-weight:900;font-size:14px'>".$row[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row[6]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[7]."</p></div></a></div></li>";
    }
}
else if($mb=='books')
{
	$sql="select * from books order by offerprice";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery8'><a href='booksspecification.php?id=$row[0]'><img src='".$row[6]."'><div class='desc8'><p style='font-weight:900;font-size:14px'>".$row[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row[7]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[8]."</p></div></a></div></li>";
    }
}
echo "</ul>";
?>