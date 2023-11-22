<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function valid()
{
	var a=frm.n1.value
	if(a=="")
	{
		alert('Please enter Your Name')
		return false
	}
	var b=frm.n2.value
	if(b=="")
	{
		alert('please enter your complete address')
		return false
	}
	var pin=frm.n10.value
	if(pin=="")
	{
		alert('enter your pincode')
		return false	
	}
	else if(pin.length!=6)
	{
		alert('pincode should be 6 digit')
		return false	
	}
	else if(isNaN(pin))
	{
		alert('enter number only')
		return false	
	}
	var c=frm.n3.value
	if(c=="")
	{
		alert('please select your state')
		return false
	}
	var email=frm.n6.value
	var at=email.indexOf('@')
	var dt=email.lastIndexOf('.')
	if(email=="")
	{
		alert('please enter your email address')
		return false
	}
	else if(at<=0 || at>dt || at+3>dt || dt+3>email.length)
	{
		alert('invalid email address')
		return false
	}
	var pass=frm.n7.value
	var rpass=frm.n8.value
	if(pass=="")
	{
		alert('please enter password')
		return false
	}
	else if(pass.length<8)
	{
		alert('password length must greater than or equal to eight')
		return false
	}
	if(rpass=="")
	{
		alert('please enter repassword')
		return false
	}
	if(rpass!=pass)
	{
		alert('repassword not match')
		return false
	}
	var mob=frm.n9.value
	if(mob=="")
	{
		alert('enter mobile number')
		return false	
	}
	else if(mob.length!=10)
	{
		alert('mobile number should be 10 digit')
		return false	
	}
	else if(isNaN(mob))
	{
		alert('enter number only')
		return false	
	}
}	
</script>
<style>
fieldset {
    border-spacing: 25px;
	border:1px solid black;
}
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
            width: 300px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
        }
		textarea
		{
			 font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 300px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
		}
        select
        {
            font-size: 14px;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 300px;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f5f5;
            font-size: 14px;
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
        .signupbtn
        {
            float: right;
            margin-right: 20px;
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
        .signupbtn:hover
        {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
            background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
            background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
        }
		legend {
       border: none;
}

</style>
</head>
<body>
<center>
<fieldset style='width:50%'>
<legend><div style='font-size:32px;color:#07A8C3;font-weight:700'>Sign Up Form</div></legend>
<table>
<form name='frm' action='frmact.php' method="post" onSubmit="return valid()">
<tr><td>Name : </td><td><input type='text' name='n1' placeholder="Enter your Name"></td></tr>
<tr><td>Address : </td><td><textarea placeholder="Enter your address" name='n2'></textarea></td></tr>
<tr><td>Pincode : </td><td><input type='text' name='n10' placeholder="Enter your pincode"></td></tr>
<tr><td>State : </td><td><select name='n3'>
<option value="">---Select---</option>
<option value="WB">West Bengal</option>
<option value="ASSAM">Assam</option>
<option value="ODISHA">Orissa</option>
<option value="JHARKHAND">Jharkhand</option>
<option value="RJ">Rajasthan</option>
</select></td></tr>
<tr><td>Email : </td><td><input type='text' name='n6' placeholder="Enter your email"></td></tr>
<tr><td>Password : </td><td><input type='password' name='n7' placeholder="Enter your password"></td></tr>
<tr><td>Re-Password : </td><td><input type='password' name='n8' placeholder="Re-Enter your password"></td></tr>
<tr><td>Mobile : </td><td><input type='text' name='n9' placeholder="Enter your mobile number"></td></tr>
<tr><td><input type="Submit" value='Sign Up' name='btn' class="signupbtn"></td><td><input type="reset" class="signupbtn" value="clear"></td></tr>
</form>
</table>
</fieldset>
</center>
</body>
</html>