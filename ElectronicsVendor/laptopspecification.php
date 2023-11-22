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
input:hover{
	font-weight:600;
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
    margin-left: 740px;
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
table td button
{
	padding-left:20px;
	font-size:30px;
	background-color:#006600;
	color:#ffffff;
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
$sql="select * from laptop where id=$id";
$res=$con->query($sql);
$row=$res->fetch_array();
		if(isset($_SESSION['id']))
		{
		$mid=$row[0];
		$cid=$_SESSION['id'];
		$modelname=$row[1];
		$price=$row[19];
		$images=$row[3];
		$con=new MySQLi("localhost","root","","electronics");
		$sql1="insert into history values(null,$mid,$cid,'null','$modelname',$price,'$images')";
		$res=$con->query($sql1);
		}
		
?>
<nav>
	<img style="margin:5px;padding-left:30px;padding-top:15px;padding-right:30px;padding-bottom:15px;height:400px;width:600px" src="<?php echo $row[3] ?>">
	<br>
	<?php
		if($row[20]>0)
		{
			if(isset($_COOKIE['user']))
			{
				$b=$_COOKIE['browser'];
				$modelname=$row[1];
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
					echo "<table><tr><td><a href='addcart.php?model=$row[1]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px'>Add To Cart</button></a></td>";
				}
			}
			else
			{
				echo "<table><tr><td><a href='addcart.php?model=$row[1]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px'>Add To Cart</button></a></td>";
			}	
			echo "<td><a href='laptopbuynow.php?model=$row[2]'><button style='background-color:#006600;color:#ffffff;width:260px;height:80px'> BUY NOW </button></a></td></tr></table>";
		}
		else
		{
			echo "<p style='color:#003366;font-size:24px'> OUT OF STOCK <p>";
		}
	?>
	
</nav>
<article>
	<p style="color:#000000;font-size:26px"><?php echo $row[1] ?></p>
	<p style="color:#00cc00;font-size:20px;padding-left:423px"> PRICE </p>
	<p style="color:#000033;font-size:28px;padding-left:423px"><strike>&#8377;<?php echo $row[18] ?></strike></p>
	<blink style='padding-left:416px'> OFFER PRICE </blink>
	<p style="color:#000033;font-size:28px;padding-left:423px">&#8377;<?php echo $row[19] ?> </p>
	<br>
	<p style="color:#000000;font-size:22px">SPECIFICATION </p><hr>
	<?php
		echo "<p> General </p>";
		echo "<table>";
		echo "<tr><td>Model Number </td><td>" .$row[2]. "</td></tr>";
		echo "<tr><td>Part Number </td><td>" .$row[4]. "</td></tr>";
		echo "<tr><td>Color </td><td>" .$row[5]. "</td></tr>";
		echo "<tr><td>Type </td><td>" .$row[6]. "</td></tr></table>";
		echo "<hr><p> Processor & Memory Features</p>";
		echo "<table>";
		echo "<tr><td>Processor brand</td><td>" .$row[7]. "</td></tr>";
		echo "<tr><td>Processor name</td><td>" .$row[8]. "</td></tr>";
		echo "<tr><td>Processor generation</td><td>" .$row[9]. "</td></tr>";
		echo "<tr><td>RAM</td><td>" .$row[10]. "</td></tr>";
		echo "<tr><td>HDD capacity</td><td>" .$row[11]. "</td></tr></table>";
		echo "<hr><p> Operating System</p>";
		echo "<table>";
		echo "<tr><td>Operating System</td><td>" .$row[12]. "</td></tr></table>";
		echo "<hr><p> Camera Features</p>";
		echo "<table>";
		echo "<tr><td>Web Camera</td><td>" .$row[13]. "</td></tr></table>";
		echo "<hr><p> Display Features</p>";
		echo "<table>";
		echo "<tr><td>Screen Size</td><td>" .$row[14]. "</td></tr>";
		echo "<tr><td>Screen Resolution</td><td>" .$row[15]. "</td></tr></table>";
		echo "<hr><p> Weight </p>";
		echo "<table>";
		echo "<tr><td>Weight</td><td>" .$row[16]. "</td></tr></table>";
		echo "<hr><p> Warranty </p>";
		echo "<table>";
		echo "<tr><td>Warranty</td><td>" .$row[17]. "</td></tr></table>";
?>
</article>
</body>
</html>