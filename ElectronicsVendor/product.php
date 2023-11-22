<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.dropbtn {
    color:#0066ff;
	padding-left:20px;
    font-size:20px;
	font-family: serif;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
	top:2px;
	left:117px;
    position: absolute;
    background-color: #ffffff;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content1 {
    display: none;
	top:2px;
	left:166px;
    position: absolute;
    background-color: #ffffff;
    min-width: 125px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	text-align:center;
}
.dropdown-content2 {
    display: none;
	top:2px;
	left:151px;
    position: absolute;
    background-color: #ffffff;
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content3 {
    display: none;
	top:2px;
	left:185px;
    position: absolute;
    background-color: #ffffff;
    min-width: 110px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
	padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content1 a {
    color: black;
	padding: 6px 10px;
    text-decoration: none;
    display: block;
}
.dropdown-content2 a {
    color: black;
	padding: 6px 8px;
    text-decoration: none;
    display: block;
}
.dropdown-content3 a {
    color: black;
	padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-content {
  display:block;
}
.dropdown:hover .dropdown-content1 {
  display:block;
}
.dropdown:hover .dropdown-content2 {
  display:block;
}
.dropdown:hover .dropdown-content3 {
  display:block;
}

.dropdown-content a:hover 
{
	background-color: #f1f1f1;
	font-style:italic;
	color:#004080;
	font-weight:700;
	text-decoration:underline;
}
.dropdown-content1 a:hover 
{
	background-color: #f1f1f1;
	font-style:italic;
	color:#004080;
	font-weight:700;
	text-decoration:underline;
}
.dropdown-content2 a:hover 
{
	background-color: #f1f1f1;
	font-style:italic;
	color:#004080;
	font-weight:700;
	text-decoration:underline;
}
.dropdown-content3 a:hover 
{
	background-color: #f1f1f1;
	font-style:italic;
	color:#004080;
	font-weight:700;
	text-decoration:underline;
}
input:hover{
	font-weight:600;
}
nav {
    float: left;
    max-width: 220px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
	color:#0066ff;
	position:fixed;
}
   
nav ul a {
	text-decoration: none;
	padding-left:20px;
	font-size:20px;
	font-family: serif;
}
blink {
           color:red;
		   font-size:18px;
		   font-weight:800;
           -webkit-animation: blink 1s step-end infinite;
           animation: blink 1s step-end infinite
         }
 
          @-webkit-keyframes blink {
          67% { opacity: 0 }
         }
 
         @keyframes blink {
         67% { opacity: 0 }
        }
article {
    margin-left: 240px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
.mySlides 
{
	display:none;
}
#result
{
	position:absolute;
	top:50px;
}
#result :hover
{
	font-size:22px;
}

</style>
<script>
function fx(str)
{
		if (str.length == 0)
		{ 
			document.getElementById("Result").innerHTML = "";
			return;
		} 
		else
		{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById("Result").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "search.php?q=" + str, true);
			xmlhttp.send();
		}
	
}

</script>
</head>
<body>
<header style="background-color:#555;height:70px;position:fixed;width:100%">
<p style="padding-top:10px">
	<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
	<?php
		$cookie=0;
		if(isset($_COOKIE['user']))
		{
			$cookie=$_COOKIE['user'];
		}
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="select * from registration where cid=$id";
			$res=$con->query($sql);
			$row=$res->fetch_array();
			echo "<span style='padding-left:160px'><input type='text' name='n1' style='width:300px;height:30px;font-size:16px' placeholder=' What are you looking for?' onKeyUp='fx(this.value)'></span><button type='submit' style='background-color:#ffffff;height:30px;width:30px' ><i class='fa fa-search'></i></button><span style='padding-left:120px;color:#ffffff'>Welcome,".$row[1]."</span><span style='padding-left:15px;color:#ffffff'><a href='track.php'><button type='submit' style='background-color:#555;color:#ffffff'>Track Orders</button></a></span><span style='padding-left:15px'><a href='log out.php'><button type='submit' style='background-color:#555;color:#ffffff'>LOG OUT </button></a></span><a href='cartdetails.php'><i class='fa fa-shopping-cart' style='padding-left:18px;font-size:28px;color:white'> Cart(".$cookie.")</i></a>";
		}
		else
		{
			echo "<span style='padding-left:160px'><input type='text' name='n1' style='width:300px;height:30px;font-size:16px' placeholder=' What are you looking for?' onKeyUp='fx(this.value)'></span><button type='submit' style='background-color:#ffffff;height:30px;width:30px' ><i class='fa fa-search'></i></button><span style='padding-left:350px;color:#ffffff'><a href='login.php'><button type='submit' style='background-color:#555;color:#ffffff'>LOG IN </button></a></span><span style='padding-left:50px'><a href='sign up.php'><button type ='submit' style='background-color:#555;color:#ffffff'> SIGN UP </button></a></span><a href='cartdetails.php'><i class='fa fa-shopping-cart' style='padding-left:18px;font-size:28px;color:white'> Cart(".$cookie.")</i></a>";
		}
	?>
	</p>
	</header><br><br><br><br>
<nav>
	<p style="padding-left:6px;padding-right:6px;background-color:#000099;color:#ffffff;font-size:30px;position:fixed"> CATEGORIES </p><br><br>
  <ul style="box-shadow: 2px 2px 2px 2px #d6d6c2;width:215px;height:65px;border-radius:25px">
    <li><div class="dropdown">
			<div class="dropbtn">ELECTRONICS
				<i class="fa fa-caret-right"></i>
			</div>
			<div class="dropdown-content1">
				<a href="mobile.php">MOBILE</a>
				<a href="laptop.php">LAPTOP</a>
				<a href="tablets.php">TABLETS</a>
			</div>
		</div>
	</li>
    <li><div class="dropdown">
			<div class="dropbtn">APPLIANCES
				<i class="fa fa-caret-right"></i>
			</div>
			<div class="dropdown-content2">
				<a href="tv.php">TV</a>
				<a href="refrigerator.php">REFRIGERATORS</a>
				<a href="ac.php">AIR CONDITIONERS</a>
			</div>
		</div>
	</li>
    <!-- <li><div class="dropdown">
			<div class="dropbtn">FASHION
				<i class="fa fa-caret-right"></i>
			</div>
			<div class="dropdown-content">
				<a href="men.php">MEN</a>
				<a href="women.php">WOMEN</a>
			</div>
		</div>
	</li>
	<li><a href="grocery.php">GROCERY</a></li>
	<li><a href="books.php">BOOKS</a></li>
	<li><a href="new1.php"><blink>NEW COLLECTIONS!</blink></a></li> -->
   </ul>
</nav>

<article>
	<nav>
	
	<div class="w3-content w3-section" style="max-height:500px">
  <img class="mySlides" style="width:1100px;height:350px" src="images/online-logo-1.jpg">
  <img class="mySlides" style="width:1100px;height:350px" src="images/consumer-electronics.png">
  <img class="mySlides" style="width:1100px;height:350px" src="images/xhm_bnr2.jpg.pagespeed.ic.p9sDfgIMoy.jpg">
  <img class="mySlides" style="width:1100px;height:350px" src="images/latest-top-fashion-trends-of-wedding-bridal-designer-sarees-in-india-online-shopping-2016-2017.jpg">
  <img class="mySlides" style="width:1100px;height:350px" src="images/homebanner-menshopheader-21jan2013.jpg">
  <img class="mySlides" style="width:1100px;height:350px" src="images/grocery-items-png-8800965151-1107.png">
  <img class="mySlides" style="width:1100px;height:350px" src="images/Urval_av_de_bocker_som_har_vunnit_Nordiska_radets_litteraturpris_under_de_50_ar_som_priset_funnits.jpg">
  <div style='padding-left:44px' id='Result'></div>
</div>
<script>
		var myIndex = 0;
		carousel();
		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2000);
		}
</script>
	</nav>	
 </article><br><br>
 <?php
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="select distinct(modelname) from history where cid=$id order by id desc";
			$res=$con->query($sql);
			echo "<article>
				<p style='font-weight:800;font-size:24px;color:#000099'>RECENTLY VIEWED BY YOU.....
					</p>";
			$c=$res->num_rows;
			$count=0;
			if($c>=1)
			{
				echo "<ul style='list-style-type:none;padding-left:55px'>";
				while($row=$res->fetch_array())
				{
					if($count<4)
					{
					$model=$row[0];
					$count1=0;
						$sql1="select * from history where modelname='$model'";
						$res1=$con->query($sql1);
						while($row1=$res1->fetch_array())
						{
							if($count1<1)
							{
								echo "<li><div style='margin:20px;width: 210px;float:left'><a href='view.php?q=$model'><img style='width:150px;height:300px' src='".$row1[6]."'><div style='padding-left: 2px;text-align:left;font-size:11px;background-color:#ffffff'><p style='font-weight:900;font-size:14px'>".$row1[4]."</p><p style='text-align:center;font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row1[5]."</p></a></div></div></li>";
							}
							$count1++;
						}
						$count++;
					}
				}
				echo "</ul>";
			}
			else
			{
				echo "<p style='font-size:24px;font-weight:500;text-align:center'>No Recent Views Available</p>";
			}
		}
		else
		{
			echo "<p style='padding-left:225px;font-size:30px;color:#000099;font-weight:900'> TOP SELLING PRODUCTS....................</p><br><br>
			 <article>
				<p style='font-weight:800;font-size:24px;color:#000099'>
					MOBILE
					<span style='float:right;background-color:#ffffff'><a href='mobile.php'><button style='background-color:#ffffff;color:#000099;width:105px;height:40px;font-size:15px' value='View All' name='btn'>VIEW ALL</button></a></span>
				</p>
				<table>
					<tr><td><a href='mobilespecification.php?id=10'><img style='width:150px;height:300px' src='images/motorola-moto-c-plus-xt1721-original-imaeup4xck2gdxzj.jpeg'><p style='padding-top:20px;padding-left:30px;font-weight:700;color:#555'>Moto C Plus</p></a></td>
					<td style='padding-left:90px'><a href='mobilespecification.php?id=13'><img style='width:150px;height:300px' src='images/samsung-galaxy-j7-prime-sm-g610fzddins-original-imaerf34vgf7bb4g.jpeg'><p style='padding-top:20px;font-weight:700;color:#555'>Samsung Galaxy j7 Prime</p></a></td>
					<td style='padding-left:70px'><a href='mobilespecification.php?id=6'><img style='width:150px;height:300px' src='images/mi-mi-mix-2-na-original-imaeydgnjzmvxwfz.jpeg'><p style='padding-top:20px;padding-left:40px;font-weight:700;color:#555'>Mi Mix 2</p></a></td>
					<td style='padding-left:80px'><a href='mobilespecification.php?id=14'><img style='width:150px;height:300px' src='images/samsung-galaxy-j2-2017-sm-j200gtkdins-original-imaeyzyf3zydbxzj.jpeg'><p style='padding-top:20px;font-weight:700;color:#555'>Samsung Galaxy j2 2017</p></a></td></tr>		
				</table>
			</article><br><br>";
		}
?>		
</body>
</html>    
   