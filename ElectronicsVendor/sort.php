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
div.gallery2 {
    margin:8px;
    width: 310px;
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
div.gallery4 {
    margin: 5px;
    width: 330px;
	height:400px;
	float:left;
}
div.gallery4 img {
    width: 320px;
    height:220px;
	
}
div.gallery4 img:hover {
    width: 325px;
	height:220px;
	overflow:hidden;
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
div.gallery6 {
    margin: 5px;
    width: 350px;
	float:left;
}
div.gallery6 img {
    width: 340px;
    height:120px;
	
}
div.gallery6 img:hover {
    width: 345px;
	height:120px;
	overflow:hidden;
}
div.gallery7 {
    margin: 5px;
    float:left;
    width: 250px;
}
div.gallery7 img {
    width: 205px;
    height:300px;
	padding-left:58px;
}
div.gallery7 img:hover {
    width: 215px;
	height:300px;
	overflow:hidden;
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
div.gallery181 {
    margin: 1px;
    float:left;
    width: 332px;
	height:450px;
}
div.gallery181 img {
    width: 325px;
    height:300px;
	padding-left:58px;
}
div.gallery181 img:hover {
    width: 335px;
	height:300px;
	overflow:hidden;
}
div.gallery171 {
    margin: 20px;
    float:left;
    width: 280px;
	height:300px;
}
div.gallery171 img {
    width: 270px;
    height:280px;
	padding-left:58px;
}
div.gallery171 img:hover {
    width: 275px;
	height:280px;
	overflow:hidden;
}
div.desc1 {
    padding: 15px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}

</style>
<?php
$mb=$_GET['q'];
$con=new MySQLi("localhost","root","","electronics");
if($mb==1)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql1="select * from mobile where offerprice<10000";
	$res1=$con->query($sql1);
			  while($row1 = $res1->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row1[0]'><img src='".$row1[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row1[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row1[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row1[4]."</p></div></a></div></li>";
			  }
	echo "</ul>";
}
else if($mb==2)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql2="select * from mobile where offerprice between 10000 and 20000";
	$res2=$con->query($sql2);
			  while($row2 = $res2->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row2[0]'><img src='".$row2[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row2[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row2[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row2[4]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==3)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql3="select * from mobile where offerprice>20000";
	$res3=$con->query($sql3);
			  while($row3 = $res3->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row3[0]'><img src='".$row3[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row3[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row3[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row3[4]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==11)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql4="select * from mobile where RAM <=2";
	$res4=$con->query($sql4);
			  while($row4 = $res4->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row4[0]'><img src='".$row4[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row4[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row4[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row4[4]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==12)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql5="select * from mobile where RAM > 2 and RAM <=4";
	$res5=$con->query($sql5);
			  while($row5 = $res5->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row5[0]'><img src='".$row5[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row5[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row5[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row5[4]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==13)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql6="select * from mobile where RAM>4";
	$res6=$con->query($sql6);
			  while($row6 = $res6->fetch_array())
			  {
				   echo "<li><div class='gallery1'><a href='mobilespecification.php?id=$row6[0]'><img src='".$row6[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row6[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>".$row6[3]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row6[4]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==21)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql7="select * from laptop where offerprice<20000";
	$res7=$con->query($sql7);
			  while($row7 = $res7->fetch_array())
			  {
				   echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row7[0]'><img src='".$row7[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row7[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row7[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row7[19]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==22)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql8="select * from laptop where offerprice between 20000 and 40000";
	$res8=$con->query($sql8);
			  while($row8 = $res8->fetch_array())
			  {
				   echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row8[0]'><img src='".$row8[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row8[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row8[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row8[19]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==23)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql9="select * from laptop where offerprice>40000";
	$res9=$con->query($sql9);
			  while($row9 = $res9->fetch_array())
			  {
				   echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row9[0]'><img src='".$row9[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row9[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row9[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row9[19]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==111)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql10="select * from laptop where RAM <=4";
	$res10=$con->query($sql10);
			  while($row10 = $res10->fetch_array())
			  {
				   echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row10[0]'><img src='".$row10[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row10[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row10[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row10[19]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==112)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql11="select * from laptop where RAM > 4";
	$res11=$con->query($sql11);
			  while($row11 = $res11->fetch_array())
			  {
				   echo "<li><div class='gallery2'><a href='laptopspecification.php?id=$row11[0]'><img src='".$row11[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row11[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row11[18]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row11[19]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==31)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql12="select * from tablets where offerprice<10000";
	$res12=$con->query($sql12);
			  while($row12 = $res12->fetch_array())
			  {
				   echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row12[0]'><img src='".$row12[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row12[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row12[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row12[22]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==32)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql13="select * from tablets where offerprice between 10000 and 20000";
	$res13=$con->query($sql13);
			  while($row13 = $res13->fetch_array())
			  {
				   echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row13[0]'><img src='".$row13[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row13[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row13[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row13[22]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==33)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql14="select * from tablets where offerprice>20000 order by color";
	$res14=$con->query($sql14);
			  while($row14 = $res14->fetch_array())
			  {
				  echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row14[0]'><img src='".$row14[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row14[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row14[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row14[22]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==121)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql15="select * from tablets where RAM <=2";
	$res15=$con->query($sql15);
			  while($row15 = $res15->fetch_array())
			  {
				   echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row15[0]'><img src='".$row15[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row15[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row15[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row15[22]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==122)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql16="select * from tablets where RAM > 2";
	$res16=$con->query($sql16);
			  while($row16 = $res16->fetch_array())
			  {
				   echo "<li><div class='gallery3'><a href='tabletsspecification.php?id=$row16[0]'><img src='".$row16[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row16[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row16[21]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row16[22]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==41)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql17="select * from tv where offerprice<20000";
	$res17=$con->query($sql17);
			  while($row17 = $res17->fetch_array())
			  {
				  echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row17[0]'><img src='".$row17[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row17[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row17[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row17[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==42)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql18="select * from tv where offerprice>20000";
	$res18=$con->query($sql18);
			  while($row18 = $res18->fetch_array())
			  {
				   echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row18[0]'><img src='".$row18[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row18[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row18[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row18[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==131)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql19="select * from tv where displaysize=32";
	$res19=$con->query($sql19);
			  while($row19 = $res19->fetch_array())
			  {
				  echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row19[0]'><img src='".$row19[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row19[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row19[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row19[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==132)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql20="select * from tv where displaysize between 39 and 43";
	$res20=$con->query($sql20);
			  while($row20 = $res20->fetch_array())
			  {
				  echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row20[0]'><img src='".$row20[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row20[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row20[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row20[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==134)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql134="select * from tv where displaysize>43";
	$res134=$con->query($sql134);
			  while($row134 = $res134->fetch_array())
			  {
				  echo "<li><div class='gallery4'><a href='tvspecification.php?id=$row134[0]'><img src='".$row134[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row134[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row134[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row134[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==51)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql21="select * from refrigerator where offerprice<20000";
	$res21=$con->query($sql21);
			  while($row21 = $res21->fetch_array())
			  {
				   echo "<li><div class='gallery5'><a href='refrigeratorspecification.php?id=$row21[0]'><img src='".$row21[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row21[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row21[12]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row21[13]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==52)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql22="select * from refrigerator where offerprice>20000";
	$res22=$con->query($sql22);
			  while($row22 = $res22->fetch_array())
			  {
				  echo "<li><div class='gallery5'><a href='refrigeratorspecification.php?id=$row22[0]'><img src='".$row22[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row22[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row22[12]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row22[13]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==141)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql23="select * from refrigerator where capacity<300";
	$res23=$con->query($sql23);
			  while($row23 = $res23->fetch_array())
			  {
				   echo "<li><div class='gallery5'><a href='refrigeratorspecification.php?id=$row23[0]'><img src='".$row23[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row23[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row23[12]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row23[13]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==142)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql24="select * from refrigerator where capacity>300";
	$res24=$con->query($sql24);
			  while($row24 = $res24->fetch_array())
			  {
				   echo "<li><div class='gallery5'><a href='refrigeratorspecification.php?id=$row24[0]'><img src='".$row24[5]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row24[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row24[12]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row24[13]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==61)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql25="select * from ac where offerprice<30000";
	$res25=$con->query($sql25);
			  while($row25 = $res25->fetch_array())
			  {
				   echo "<li><div class='gallery6'><a href='acspecification.php?id=$row25[0]'><img src='".$row25[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row25[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row25[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row25[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==62)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql26="select * from ac where offerprice between 30000 and 40000";
	$res26=$con->query($sql26);
			  while($row26 = $res26->fetch_array())
			  {
				   echo "<li><div class='gallery6'><a href='acspecification.php?id=$row26[0]'><img src='".$row26[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row26[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row26[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row26[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==63)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql27="select * from ac where offerprice>40000";
	$res27=$con->query($sql27);
			  while($row27 = $res27->fetch_array())
			  {
				   echo "<li><div class='gallery6'><a href='acspecification.php?id=$row27[0]'><img src='".$row27[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row27[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row27[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row27[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==151)
{
	echo "<ul style='list-style-type:none;padding-left:85px'>";
	$sql28="select * from ac where capacity=1";
	$res28=$con->query($sql28);
			  while($row28 = $res28->fetch_array())
			  {
				   echo "<li><div class='gallery6'><a href='acspecification.php?id=$row28[0]'><img src='".$row28[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row28[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row28[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row28[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==152)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql29="select * from ac where capacity=2";
	$res29=$con->query($sql29);
			  while($row29 = $res29->fetch_array())
			  {
				   echo "<li><div class='gallery6'><a href='acspecification.php?id=$row29[0]'><img src='".$row29[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row29[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row29[9]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row29[10]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==71)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql30="select * from watches where offerprice<1000 and gender='M'";
	$res30=$con->query($sql30);
			  while($row30 = $res30->fetch_array())
			  {
				   echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row30[0]'><img src='".$row30[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row30[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row30[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row30[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==171)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql171="select * from watches where id>=25 and gender='M'";
	$res171=$con->query($sql171);
			  while($row171 = $res171->fetch_array())
			  {
				   echo "<li><div class='gallery171'><a href='watchesspecification.php?id=$row171[0]'><img src='".$row171[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row171[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row171[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row171[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==181)
{
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	$sql181="select * from wear where id >=10 and gender='M'";
	$res181=$con->query($sql181);
			  while($row181 = $res181->fetch_array())
			  {
				   echo "<li><div class='gallery181'><a href='wearspecification.php?id=$row181[0]'><img src='".$row181[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row181[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row181[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row181[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==72)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql31="select * from watches where offerprice between 1000 and 2000 and gender='M'";
	$res31=$con->query($sql31);
			  while($row31 = $res31->fetch_array())
			  {
				  echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row31[0]'><img src='".$row31[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row31[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row31[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row31[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==172)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql172="select * from watches where id>=25 and gender='F'";
	$res172=$con->query($sql172);
			  while($row172 = $res172->fetch_array())
			  {
				   echo "<li><div class='gallery171'><a href='watchesspecification.php?id=$row172[0]'><img src='".$row172[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row172[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row172[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row172[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==182)
{
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	$sql182="select * from wear where id >=10 and gender='F'";
	$res182=$con->query($sql182);
			  while($row182 = $res182->fetch_array())
			  {
				   echo "<li><div class='gallery181'><a href='wearspecification.php?id=$row182[0]'><img src='".$row182[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row182[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row182[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row182[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==73)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql32="select * from watches where offerprice>2000 and gender='M'";
	$res32=$con->query($sql32);
			  while($row32 = $res32->fetch_array())
			  {
				   echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row32[0]'><img src='".$row32[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row32[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row32[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row32[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==81)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql33="select * from watches where offerprice<1000 and gender='F'";
	$res33=$con->query($sql33);
			  while($row33 = $res33->fetch_array())
			  {
				   echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row33[0]'><img src='".$row33[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row33[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row33[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row33[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==82)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql34="select * from watches where offerprice between 1000 and 2000 and gender='F'";
	$res34=$con->query($sql34);
			  while($row34 = $res34->fetch_array())
			  {
				   echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row34[0]'><img src='".$row34[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row34[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row34[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row34[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==83)
{
	echo "<ul style='list-style-type:none;padding-left:15px'>";
	$sql35="select * from watches where offerprice>2000 and gender='F'";
	$res35=$con->query($sql35);
			  while($row35 = $res35->fetch_array())
			  {
				  echo "<li><div class='gallery7'><a href='watchesspecification.php?id=$row35[0]'><img src='".$row35[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row35[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row35[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row35[9]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==91)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql36="select * from books where offerprice<500 order by offerprice";
	$res36=$con->query($sql36);
			  while($row36 = $res36->fetch_array())
			  {
				   echo "<li><div class='gallery8'><a href='booksspecification.php?id=$row36[0]'><img src='".$row36[6]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row36[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row36[7]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row36[8]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==92)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql37="select * from books where offerprice>500";
	$res37=$con->query($sql37);
			  while($row37 = $res37->fetch_array())
			  {
				  echo "<li><div class='gallery8'><a href='booksspecification.php?id=$row37[0]'><img src='".$row37[6]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row37[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row37[7]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row37[8]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==161)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql38="select * from books where language='Bengali'";
	$res38=$con->query($sql38);
			  while($row38 = $res38->fetch_array())
			  {
				   echo "<li><div class='gallery8'><a href='booksspecification.php?id=$row38[0]'><img src='".$row38[6]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row38[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row38[7]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row38[8]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}
else if($mb==162)
{
	echo "<ul style='list-style-type:none;padding-left:45px'>";
	$sql39="select * from books where language='English' order by offerprice";
	$res39=$con->query($sql39);
			  while($row39 = $res39->fetch_array())
			  {
				  echo "<li><div class='gallery8'><a href='booksspecification.php?id=$row39[0]'><img src='".$row39[6]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row39[1]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row39[7]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row39[8]."</p></div></a></div></li>";
			  }
			  echo "</ul>";
}

else
{
	echo "<center><p style='font-size:38px;padding-top:200px'>Such item is not present</p></center>";
}
?>