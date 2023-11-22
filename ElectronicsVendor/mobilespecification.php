<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
}
   
nav ul a {
    text-decoration: none;
	padding-left:20px;
	font-size:20px;
	font-style:oblique;
}

article {
    margin-left: 700px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
table th{
        padding-right: 120px; 
		padding-bottom:6px;
		
    }
table td{
        padding-right: 120px; 
		padding-bottom:8px;
		font-size:14px;
		font-style:arial;
}
table td button
{
	padding-left:20px;
	font-size:30px;
	background-color:#006600;
	color:#ffffff;
}
hr
{
	border: 2px solid lightgray;
}
p
{
	font-size:16px;
	font-weight:700;
	color:#527a7a;
}
blink {
           color:red;
		   font-size:24px;
           -webkit-animation: blink 1s step-end infinite;
           animation: blink 1s step-end infinite
         }
 
          @-webkit-keyframes blink {
          67% { opacity: 0 }
         }
 
         @keyframes blink {
         67% { opacity: 0 }
        }
#Result
{
	position:absolute;
	top:50px;
}
#Result :hover
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
<header style="background-color:#555;height:70px">
<div style="padding-top:10px;font-color:#000000">
	<a href="index.php"><i class="glyphicon glyphicon-home" style="font-size:30px;color:#ffffff;padding-left:30px">HOME</i></a>
	<?php
		session_start();
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
	</div>
</header><div style='padding-left:312px' id='Result'></div><br>
<?php
$id=$_GET['id'];
$con=new MySQLi("localhost","root","","electronics");
$sql="select * from mobile where id=$id";
$res=$con->query($sql);
$row=$res->fetch_array();
		if(isset($_SESSION['id']))
		{
		$mid=$row[0];
		$cid=$_SESSION['id'];
		$modelname=$row[2];
		$price=$row[4];
		$images=$row[5];
		$con=new MySQLi("localhost","root","","electronics");
		$sql1="insert into history values(null,$mid,$cid,'null','$modelname',$price,'$images')";
		$res=$con->query($sql1);
		}
?>
<nav>
	<img style="border:2px solid lightGray;margin:35px;padding-left:150px;padding-top:15px;padding-right:150px;padding-bottom:15px;height:500px" src="<?php echo $row[5] ?>"><br>
	<?php
	if($row[35]>0)
		{
			if(isset($_COOKIE['user']))
			{
				$b=$_COOKIE['browser'];
				$modelname=$row[2];
				$con=new MySQLi("localhost","root","","electronics");
				$sql1="select *  from cart1 where bid=$b and modelname='$modelname'";
				$res1=$con->query($sql1);
				$c1=$res1->num_rows;
				if($c1>=1)
				{
					echo "<table><tr><td><a href='cartdetails.php'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px' name='btn1'>Go To Cart</button></a></td>";
				}
				else
				{
					echo "<table><tr><td><a href='addcart.php?model=$row[2]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px' name='btn1'>Add To Cart</button></a></td>";
				}
			}
			else
			{
				echo "<table><tr><td><a href='addcart.php?model=$row[2]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px' name='btn1'>Add To Cart</button></a></td>";
			}	
			echo "<td><a href='mobilebuynow.php?model=$row[6]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px'> BUY NOW </button></a></td></tr></table>";
		}
		else
		{
			echo "<p style='color:#003366;font-size:24px'> OUT OF STOCK </p>";
		}
	?>
</nav>
<article>
<?php
	$sql2="select * from mobile where id=$id";
	$res2=$con->query($sql2);
	$row2=$res2->fetch_array();
?>
	<p style="color:#000000;font-size:30px"><?php echo $row2[2] ?></p>
	<p style="color:#00cc00;font-size:24px;padding-left:423px"> PRICE </p>
	<p style="color:#000033;font-size:30px;padding-left:423px"><strike><?php echo $row2[3] ?></strike></p>
	<blink style='padding-left:423px'> OFFER PRICE </blink>
	<p style="color:#000033;font-size:32px;padding-left:423px">&#8377;<?php echo $row2[4] ?> </p>
	<br><br>
	<p style="color:#000000;font-size:22px">SPECIFICATION </p><hr>
	<?php
		echo "<p> General </p>";
		echo "<table>";
		echo "<tr><td>Model No. </td><td>" .$row2[6]. "</td></tr>";
		echo "<tr><td>Color </td><td>" .$row2[7]. "</td></tr>";
		echo "<tr><td>SIM Type </td><td>" .$row2[8]. "</td></tr></table>";
		echo "<hr><p> Display Features</p>";
		echo "<table>";
		echo "<tr><td>Display Size</td><td>" .$row2[9]. "</td></tr>";
		echo "<tr><td>Resolution</td><td>" .$row2[10]. "</td></tr>";
		echo "<tr><td>Resolution Type</td><td>" .$row2[11]. "</td></tr></table>";
		echo "<hr><p> Os & Processor Features</p>";
		echo "<table>";
		echo "<tr><td>Operating System</td><td>" .$row2[12]. "</td></tr>";
		echo "<tr><td>Processor Type</td><td>" .$row2[13]. "</td></tr>";
		echo "<tr><td>Processor Core</td><td>" .$row2[14]. "</td></tr></table>";
		echo "<hr><p> Memory & Storage Features</p>";
		echo "<table>";
		echo "<tr><td>Internal Storage</td><td>" .$row2[15]. "</td></tr>";
		echo "<tr><td>RAM</td><td>" .$row2[16]. "</td></tr>";
		echo "<tr><td>Expandable Storage</td><td>" .$row2[17]. "</td></tr></table>";
		echo "<hr><p> Camera Features</p>";
		echo "<table>";
		echo "<tr><td>Primary Camera</td><td>" .$row2[18]. "</td></tr>";
		echo "<tr><td>Secondary Camera</td><td>" .$row2[19]. "</td></tr>";
		echo "<tr><td>Video Recording</td><td>" .$row2[20]. "</td></tr></table>";
		echo "<hr><p> Connectivity Features</p>";
		echo "<table>";
		echo "<tr><td>Network Type</td><td>" .$row2[21]. "</td></tr>";
		echo "<tr><td>Supported Network</td><td>" .$row2[22]. "</td></tr>";
		echo "<tr><td>3G Speed</td><td>" .$row2[23]. "</td></tr>";
		echo "<tr><td>WiFi Version</td><td>" .$row2[24]. "</td></tr>";
		echo "<tr><td>GPS Support</td><td>" .$row2[25]. "</td></tr></table>";
		echo "<hr><p> Other Details</p>";
		echo "<table>";
		echo "<tr><td>SIM Size</td><td>" .$row2[26]. "</td></tr>";
		echo "<tr><td>Sensors</td><td>" .$row2[27]. "</td></tr>";
		echo "<tr><td>Audio</td><td>" .$row2[28]. "</td></tr></table></tr>";
		echo "<tr><hr><p> Battery & Power Features</p>";
		echo "<table>";
		echo "<tr><td>Battery</td><td>" .$row2[29]. "</td></tr></table></tr>";
		echo "<tr><hr><p> Warranty </p>";
		echo "<table>";
		echo "<tr><td>Warranty</td><td>" .$row2[30]. "</td></tr></table>";
		echo "<hr><p> Dimensions</p>";
		echo "<table>";
		echo "<tr><td>Width</td><td>" .$row2[31]. "</td></tr>";
		echo "<tr><td>Height</td><td>" .$row2[32]. "</td></tr>";
		echo "<tr><td>Depth</td><td>" .$row2[33]. "</td></tr>";
		echo "<tr><td>Weight</td><td>" .$row2[34]. "</td></tr></table>";
?>
</article>
</body>
</html>