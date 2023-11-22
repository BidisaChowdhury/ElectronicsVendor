<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<style>
        html, body
        {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            font-family: "Helvetica Neue" , Helvetica, sans-serif;
            background: #FFFFFF;
        }
        .logincontent
        {
            position: fixed;
            width: 350px;
            height: 300px;
            top: 50%;
            left: 50%;
            margin-top: -150px;
            margin-left: -175px;
            background: #07A8C3;
            padding-top: 10px;
        }
        .loginheading
        {
            border-bottom: solid 1px #ECF2F5;
            padding-left: 18px;
            padding-bottom: 10px;
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }
        label
        {
            color: #ffffff;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 15px;
        }
        input[type=text], input[type=password]
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 350px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
        }
        input[type=checkbox]
        {
            margin-left: 18px;
            margin-top: 30px;
        }
        .loginremember
        {
            background: #ECF2F5;
            height: 70px;
            margin-top: 20px;
        }
        .check
        {
            font-family: sans-serif;
            position: relative;
            top: -2px;
            margin-left: 2px;
            padding: 0px;
            font-size: 12px;
            color: #321;
        }
        .loginbtn
        {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            padding: 6px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #07A8C3;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#07A8C3), to(#6EE4E8));
            background-image: -moz-linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            background-image: linear-gradient(top left 90deg, #07A8C3 0%, #6EE4E8 100%);
            border-radius: 30px;
            border: 1px solid #07A8C3;
            cursor: pointer;
        }
        .loginbtn:hover
        {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
            background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
            background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
</style>
</head>
<body>
<center>
<div style='padding-top:100px'></div>
<fieldset style='width:40%;height:50%;padding-top:50px;padding-left:50px'>
<legend><div style='font-size:32px;color:#07A8C3;font-weight:700'> Log In Form </div></legend>
<table>
<form method='post' >
<tr><td>Email or Mobile: </td></tr>
<tr><td><input type='text' name='n1' placeholder="Enter your Email or Mobile"></td></tr>
<tr><td>Password : </td></tr>
<tr><td><input type='password' name="n2" placeholder="Enter your password"></td></tr>
<tr><td><button type="Submit" value="Login" name='btn' class="loginbtn"> Log In </button></td><td><input type="reset" class="loginbtn" value="clear"></td></tr>
</form>
</table>
</fieldset>
</center>
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
			echo "<script>alert('Invalid user,First Sign Up')</script>";
			echo "<script>window.location.href='sign up.php'</script>";
		}
}
?>