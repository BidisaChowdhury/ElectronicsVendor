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
    padding: 10px;
}

nav ul {
    list-style-type: none;
    padding: 0;
	color:#0066ff;
}
.left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
}

nav ul a {
    text-decoration: none;
	padding-left:20px;
	font-size:20px;
	font-style:oblique;
}
#table1{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}
td, th {
    text-align: left;
    padding: 5px;
}

article {
    margin-left: 900px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
hr
{
	border: 2px solid lightgray;
}
#result
{
	position:absolute;
	top:50px;
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
function fy(str)
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
					location.reload();
				}
			}
			xmlhttp.open("GET", "calculation.php?qty="+str, true);
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
</header><br>
<center>
	<?php
	if(isset($_COOKIE['user']))
	{
		$b=$_COOKIE['browser'];
		$con=new MySQLi("localhost","root","","electronics");
		$sql="select *  from cart1 where bid=$b";
		$res=$con->query($sql);
		$c=$res->num_rows;
		if($c>=1)
		{	

			echo "<table id='table1'>";
			echo "<tr><th style='border: 1px solid #dddddd'></th><th style='border: 1px solid #dddddd'>Name</th><th style='border: 1px solid #dddddd'>Quantity</th><th style='border: 1px solid #dddddd'>Price</th><th style='border: 1px solid #dddddd'>Action</th></tr>";
			$total=0;
			while($row=$res->fetch_array())
			{
				$model=$row[1];
				$qty=$row[3];
				$sql1="select * from mobile where modelname='$row[1]'";
				$res1=$con->query($sql1);
				$sql2="select * from tablets where modelname='$row[1]'";
				$res2=$con->query($sql2);
				$sql3="select * from laptop where modelname='$row[1]'";
				$res3=$con->query($sql3);
				$sql4="select * from tv where modelname='$row[1]'";
				$res4=$con->query($sql4);
				$sql5="select * from refrigerator where modelname='$row[1]'";
				$res5=$con->query($sql5);
				$sql6="select * from ac where modelname='$row[1]'";
				$res6=$con->query($sql6);
				$sql7="select * from watches where modelname='$row[1]'";
				$res7=$con->query($sql7);
				$sql8="select * from wear where modelname='$row[1]'";
				$res8=$con->query($sql8);
				$sql9="select * from grocery where modelname='$row[1]'";
				$res9=$con->query($sql9);
				$sql10="select * from books where bookname='$row[1]'";
				$res10=$con->query($sql10);
				if($row1=$res1->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row1[5]."'></td><td style='border: 1px solid #dddddd'>".$row1[2]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row1[35]>0)
					{
						for($i=1;$i<=$row1[35];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row1[2].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row1[2].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row1[4]."</td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row1[4]*$qty;
				}
				if($row2=$res2->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row2[3]."'></td><td style='border: 1px solid #dddddd'>".$row2[2]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row2[23]>0)
					{
						for($i=1;$i<=$row2[23];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row2[2].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row2[2].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row2[22]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row2[22]*$qty;
				}
				if($row3=$res3->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row3[3]."'></td><td style='border: 1px solid #dddddd'>".$row3[1]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row3[20]>0)
					{
						for($i=1;$i<=$row3[20];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row3[1].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row3[1].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row3[19]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row3[19]*$qty;
				}
				if($row4=$res4->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row4[4]."'></td><td style='border: 1px solid #dddddd'>".$row4[2]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row4[11]>0)
					{
						for($i=1;$i<=$row4[11];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row4[2].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row4[2].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row4[10]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row4[10]*$qty;
				}
				if($row5=$res5->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row5[5]."'></td><td style='border: 1px solid #dddddd'>".$row5[1]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row5[14]>0)
					{
						for($i=1;$i<=$row5[14];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row5[1].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row5[1].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row5[13]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row5[13]*$qty;
				}
				if($row6=$res6->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:150px;width:400px' src='".$row6[3]."'></td><td style='border: 1px solid #dddddd'>".$row6[1]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row6[11]>0)
					{
						for($i=1;$i<=$row6[11];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row6[1].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row6[1].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row6[10]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row6[10]*$qty;
				}
				if($row7=$res7->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row7[4]."'></td><td style='border: 1px solid #dddddd'>".$row7[2]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row7[10]>0)
					{
						for($i=1;$i<=$row7[10];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row7[2].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row7[2].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row7[9]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row7[9]*$qty;
				}
				if($row8=$res8->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row8[3]."'></td><td style='border: 1px solid #dddddd'>".$row8[2]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row8[10]>0)
					{
						for($i=1;$i<=$row8[10];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row8[2].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row8[2].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row8[9]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row8[9]*$qty;
				}
				if($row9=$res9->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row9[8]."'></td><td style='border: 1px solid #dddddd'>".$row9[4]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row9[9]>0)
					{
						for($i=1;$i<=$row9[9];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row9[4].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row9[4].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row9[7]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row9[7]*$qty;
				}
				if($row10=$res10->fetch_array())
				{
				echo "<tr><td style='border: 1px solid #dddddd;text-align:center'><img style='height:200px' src='".$row10[6]."'></td><td style='border: 1px solid #dddddd'>".$row10[1]."</td><td style='border: 1px solid #dddddd'><select onChange='fy(this.value)'>";
					if($row10[9]>0)
					{
						for($i=1;$i<=$row10[9];$i++)
						{
							if($qty==$i)
								echo "<option value='".$row10[1].",".$i."' selected>" .$i. "</option>";
							else
								echo "<option value='".$row10[1].",".$i."'>" .$i. "</option>";
						}
					}
				echo "</select></td><td style='border: 1px solid #dddddd'>&#8377;".$qty*$row10[8]."</div></td><td style='border: 1px solid #dddddd'><a href='delcart.php?model=$model'>Remove</a></td></tr>";
				$total=$total+$row10[8]*$qty;
				}
			}
			echo "<tr><td colspan='3' style='border: 1px solid #dddddd'></td><td colspan='2' style='border: 1px solid #dddddd'>Subtotal : &#8377; ".$total. "</td></tr>";
			echo"</table><br>";
			echo "<table>";
			echo "<tr><td><a href='product.php'><button style='background-color:#4d0026;color:#ffffff;width:200px;height:60px'><i class='fa fa-angle-double-left' style='font-size:24px;color:white'></i> Continue Shopping</button></a></td><td style='float:right'><a href='order.php'><button style='background-color:#4d0026;color:#ffffff;width:200px;height:60px' name='btn'> Place Order</button></a></td></tr>";
			echo "</table>";
			
		}
		else
		{
			echo "<p style='padding-left:120px;font-size:36px;padding-top:180px'>Your shopping cart is empty</p>";
		}
	}
	else
	{
		echo "<p style='padding-left:120px;font-size:36px;padding-top:180px'>Your shopping cart is empty</p>";
	}
?>
</center>
<div style='padding-left:312px' id='Result'></div>
</body>
</html>