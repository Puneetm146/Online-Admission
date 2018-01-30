<?php
$host="localhost";
$username="root";
$password="root";
$db_name="login_record";


$conn = mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


if(isset($_POST['sub']))
{	
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$last = $_POST['last'];
	$add = $_POST['add'];
	$phno = $_POST['phno'];
	$dob = $_POST['dob'];
	$scname = $_POST['scname'];
	$graduate = $_POST['graduate'];
	$sql = mysql_query("update student set first = '$name' where rollno='$roll'");
	$sql = mysql_query("update student set last = '$last' where rollno='$roll'");
	$sql = mysql_query("update student set address = '$add' where rollno='$roll'");
	$sql1 = mysql_query("UPDATE student set phno = '$phno' where rollno='$roll'");
	$sql2 = mysql_query("UPDATE school set dob = '$dob' where rollno='$roll'");
	$sql3 = mysql_query("UPDATE school set school = '$scname' where rollno='$roll'");
	$sql4 = mysql_query("UPDATE school set graduate = '$graduate' where rollno='$roll'");
	 echo "<script>alert('$roll is updated successfully');</script>";
}

if(isset($_POST['del']))
{	
	$roll = $_POST['roll'];
	$sql = mysql_query("Delete from student where rollno='$roll'");
	echo "<script>alert('$roll is deleted successfully');</script>";
}
?>
<html>
<body bgcolor="#4dff4d">
	<form method="post" action="">

		<center>
		<h2>Update the details:</h2><br><br>
		Roll No: <input type="text" name="roll"/><br><br>
		<h5>Following can be updated:</h5><br><br>
		First Name <input type="text" name="name"/><nbsp><nbsp>
		Last Name <input type="text" name="last"/><br><br>
		Address <input type="text" name="add"/><br><br>
		Phone Number <input type="text" name="phno"/><br><br>
		Date of Birth <input type="text" name="dob"/><br><br>
		School Name <input type="text" name="scname"/><br><br>
		Graduation <input type="text" name="graduate"/><br><br>
		<input type="submit" name="sub" value="Update"/><br><br>
		If you want to delete the information, press Delete button:<br><br>
		<input type="submit" name="del" value="Delete"/>
		
		</center>
	</form>
</body>

</html>
