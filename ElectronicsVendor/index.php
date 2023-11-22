<html>
<head>
<meta charset="utf-8">
<title></title>
<style>
	.bg {
    background-image: url("images/online-shopping-pic.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.footer {
	position:fixed;
    bottom: 0;
    width: 100%;
    color: #000033;
	text-decoration:none;
	font-size:25px;
	font-weight:900;
}
</style>
</head>
<body>
	<div class="bg">
		<div style="float:left;padding-left:50px;padding-top:40px"><form method="post" style="opacity:.9;border: 2px solid black;margin: auto;text-align: center;width:340px;height:200px">
		<h2 style="padding-left:5px">SIGN IN</h2><hr>
		<input type='text' name='n1' placeholder="EMAIL OR MOBILE" ><br><br>
		<input type='password' name='n2' placeholder="PASSWORD" ><br><br>
		<input style="background-color:#000099;color:#ffffff;width:70px;height:30px" type="submit" value="Sign In" name='btn'>&nbsp &nbsp &nbsp &nbsp
		</form>
		</div><br>
		<div style="padding-right:905px;padding-top:250px"><form action='sign up.php' method="post" style="opacity:.9;border: 2px solid black;margin: auto;text-align: center;width:340px;height:200px">
		<h2 style="padding-left:5px">SIGN UP</h2><hr>
		<p style="font-weight:900;color:#003300	;font-size:22px">New Customer ?</p>
		<div><a href='sign up.php'><button style="background-color:#000099;color:#ffffff;width:70px;height:30px" type="submit" value="Sign Up" name='btn1'>Sign Up</button></a></div>
		</form>
		</div>
		<div><a class="footer" style="left:310px" href='#'>|&nbsp &nbsp HOME &nbsp &nbsp | &nbsp </a></div>
		<div><a class="footer" style="left:480px" href='about us.php'>ABOUT US &nbsp &nbsp | &nbsp </a></div>
		<div><a class="footer" style="left:660px" href='contact us.php'>CONTACT US &nbsp &nbsp | &nbsp </a></div>
		<div><a class="footer" style="left:880px" href='product.php'>PRODUCTS &nbsp &nbsp | &nbsp </a></div>
	</div>
</body>
</html>
<?php
session_start();
if(isset($_POST['btn']))
{
		$id=$_POST['n1'];
		$pass=$_POST['n2'];
		$con=new MySQLi("localhost","root","","electronics");
		$sql="select * from registration where email='$id' and password='$pass' or mobile='$id' and password='$pass' ";
		$res=$con->query($sql);
		$c=$res->num_rows;
		if($c>=1)
		{
			$row=$res->fetch_array();
			$_SESSION['id']=$row[0];
			echo "<script>window.location.href='product.php'</script>";
		}
		else
		{
			echo "Invalid user";
		}
}
?>