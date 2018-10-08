<html>
<head>

<body>

<form name="SignIn Form" method="post" action="logIn Form.php">

Username:<input type="text" name="un"/>
<br><br>
Fullname:<input type="text" name="fn"/>
<br><br>
Email:<input type="text" name="em"/>
<br><br>
Phone:<input type="text" name="phn"/>
<br><br>
Password:<input type="password" name="pw"/>
<br><br>
Confirm Password:<input type="password" name="cpw"/>
<br><br>

Gender:
	<input type="radio" name="gender" value="Male"/>Male
	<input type="radio" name="gender" value="Female"/>Female
	<input type="radio" name="gender" value="Other"/>Other
<br><br>
	
Education:
	<input type="checkbox" name="ed[]" value="SSC"/>SSC
	<input type="checkbox" name="ed[]" value="HSC"/>HSC
	<input type="checkbox" name="ed[]" value="BSC"/>BSC
	<input type="checkbox" name="ed[]" value="MSC"/>MSC
<br><br>
<input type="submit" value="Submit" name="Submit"/>

</form>

</body>
</head>
</html>