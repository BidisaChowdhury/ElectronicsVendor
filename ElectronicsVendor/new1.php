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
		   padding-left:1px;
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
    margin-left: 220px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
div.gallery1 {
    margin: 1px;
    float:left;
    width: 332px;
	height:500px;
}
div.gallery2 {
    margin: 20px;
    float:left;
    width: 280px;
	height:400px;
}
div.gallery1 img {
    width: 325px;
    height:300px;
	padding-left:58px;
}
div.gallery2 img {
    width: 270px;
    height:280px;
	padding-left:28px;
}

div.gallery1 img:hover {
    width: 335px;
	height:300px;
	overflow:hidden;
}
div.gallery2 img:hover {
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
function fz(str)
{
		if (str.length == 0)
		{ 
			document.getElementById("Res").innerHTML = "";
			return;
		} 
		else
		{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById("Res").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "sort.php?q=" + str, true);
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
	<p style="padding-left:4px;background-color:#000099;color:#ffffff;font-size:20px"> Sort Watches</p>
		<div style="box-shadow: 1px 2px 2px 2px #d6d6c2;width:190px;height:50px">
		<input type='radio' name='n11' onChange='fz(this.value)' value='171'> MEN<br>
		<input type='radio' name='n11' onChange='fz(this.value)' value='172'> WOMEN <br>
		</div><br>
		<p style="padding-left:4px;background-color:#000099;color:#ffffff;font-size:20px"> Sort Cloths</p>
		<div style="box-shadow: 1px 2px 2px 2px #d6d6c2;width:190px;height:50px">
		<input type='radio' name='n11' onChange='fz(this.value)' value='181'> MEN<br>
		<input type='radio' name='n11' onChange='fz(this.value)' value='182'> WOMEN <br>
		</div>
</nav>

<article>
	<nav>
	
	<div class="w3-content w3-section" style="max-height:500px">
  <img class="mySlides" style="width:1100px;height:350px" src="images/online-logo-1.jpg">
  <img class="mySlides" style="width:1100px;height:350px" src="images/offer1-img.png">
  <img class="mySlides" style="width:1100px;height:350px" src="images/durga_puja_banner.jpg">
  <div style='padding-left:64px' id='Result'></div>
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
 <div id="Res">
 <?php
	$con=new MySQLi("localhost","root","","electronics");
	$sql="select * from wear where id>=10";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery1'><a href='wearspecification.php?id=$row[0]'><img src='".$row[3]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377;".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
    }
	echo "</ul>";
	$sql="select * from watches where id>=25";
	$res=$con->query($sql);
	echo "<ul style='list-style-type:none;padding-left:5px'>";
	while($row=$res->fetch_array())
	{
		echo "<li><div class='gallery2'><a href='watchesspecification.php?id=$row[0]'><img src='".$row[4]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row[2]."</p><p style='color:#006600;font-weight:600;font-size:12px'><strike>&#8377 ".$row[8]."</strike></p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[9]."</p></div></a></div></li>";
    }
	echo "</ul>";
?>
</div>