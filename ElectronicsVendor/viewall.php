<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
}
   
nav ul a {
    text-decoration: none;
	padding-left:20px;
	font-size:20px;
	font-style:oblique;
}

article {
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
.mySlides 
{
	display:none;
}
 div.gallery1 {
    margin: 45px;
    width: 200px;
	float:left;
}
div.gallery1 img {
    width: 190px;
    height:320px;
	
}
div.gallery1 img:hover {
    width: 195px;
	height:320px;
	overflow:hidden;
}

div.desc1 {
    padding: 5px;
    text-align: center;
	font-size:11px;
	background-color:#ffffff;
}
</style>
</head>
<body>
<header style="background-color:#555;height:70px">
<p style="padding-top:10px">
	<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
	<span style="padding-left:260px"><input type="text" style="width:300px;height:30px;font-size:16px" placeholder=" What are you looking for?"></span><button type="submit"style="background-color:#ffffff;height:30px;width:30px" ><i class="fa fa-search"></i></button>
	<?php
		session_start();
		if(isset($_SESSION['id']))
		{
			$id=$_SESSION['id'];
			$con=new MySQLi("localhost","root","","electronics");
			$sql="select * from registration where cid=$id";
			$res=$con->query($sql);
			$row=$res->fetch_array();
			echo "<span style='padding-left:120px;color:#ffffff'>Welcome,".$row[1]."</span><span style='padding-left:15px;color:#ffffff'><a href='track.php'><button type='submit' style='background-color:#555;color:#ffffff'>Track My Orders</button></a></span><span style='padding-left:15px'><a href='log out.php'><button type='submit' style='background-color:#555;color:#ffffff'>LOG OUT </button></a></span>";

		}
		else
		{
			echo "<span style='padding-left:350px;color:#ffffff'><a href='login.php'><button type='submit' style='background-color:#555;color:#ffffff'>LOG IN </button></a></span><span style='padding-left:50px'><a href='sign up.php'><button type ='submit' style='background-color:#555;color:#ffffff'> SIGN UP </button></a></span>";
		}
	?>
	</header><br>
<article>
<?php
	$sql1="select * from history where cid=$id";
	$res=$con->query($sql1);
	echo "<ul style='list-style-type:none;padding-left:55px'>";
	$count=0;
	while($row=$res->fetch_array())
	{
		if($count<10)
		{
		echo "<li><div class='gallery1'><img src='".$row[6]."'><div class='desc1'><p style='font-weight:900;font-size:14px'>".$row[4]."</p><p style='font-weight:600;font-size:12px;color:#5c8a8a'>NOW &#8377;" .$row[5]."</p></div></div></li>";
		}
		$count++;
    }
	
	echo "</ul>";
?>
</article>
</body>
</html>                          