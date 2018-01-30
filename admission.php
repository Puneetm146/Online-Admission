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
	$name = $_POST['first_name'];
	$last = $_POST['last_name'];
	$add = $_POST['add'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$phno = $_POST['phno'];
	$lang = $_POST['lang'];
	$religion = $_POST['religion'];
	$sex = $_POST['sex'];
	$dob = $_POST['dob'];
	$school = $_POST['school'];
	$graduation = $_POST['graduation'];
	$marks = $_POST['marks'];
	$father = $_POST['father_name'];
	$mother = $_POST['mother_name'];
	$occup1 = $_POST['occupation1'];
	$occup2 = $_POST['occupation2'];


	$sql = mysql_query("insert into student (roll,first,last,address,city,zip,country,phno,religion,sex) values('$roll','$name','$last','$add','$city','$zip','$country','$phno','$religion','$sex')");

	$sq = mysql_query("insert into school(roll,school,graduation,12percent,dob,language,father,mother,fatherjob,motherjob) values('$roll','$school','$graduation','$marks','$dob','$lang','$father','$mother','$occup1','$occup2')");

	}
?>
<html>	
	<head>
	<script>
		function validate(){
			var roll = document.forms["myform"]["roll"].value;
			var first = document.forms["myform"]["first_name"].value;
			var last = document.forms["myform"]["last_name"].value;
			var add = document.forms["myform"]["add"].value;
			var city = document.forms["myform"]["city"].value;
			var zip = document.forms["myform"]["zip"].value;
			var country = document.forms["myform"]["country"].value;
			var phno = document.forms["myform"]["phno"].value;
			var lang = document.forms["myform"]["lang"].value;
			var religion = document.forms["myform"]["religion"].value;
			var sex = document.forms["myform"]["sex"].value;
			var dob = document.forms["myform"]["dob"].value;
			var school = document.forms["myform"]["school"].value;
			var graduation = document.forms["myform"]["graduation"].value;
			var marks = document.forms["myform"]["marks"].value;
			var father_name = document.forms["myform"]["father_name"].value;
			var mother_name = document.forms["myform"]["mother_name"].value;
			var occupation1 = document.forms["myform"]["occupation1"].value;
			var occupation2 = document.forms["myform"]["occupation2"].value;

		if ( roll == "" || first == "" || last == "" || add == "" || city == "" || zip == "" || country == "" ||  phno == "" || lang == "" || religion == "" || sex == "" || dob == "" || school == "" || graduation == "" || marks == "" ||  father_name == "" || mother_name == ""|| occupation1 == "" || occupation2 == ""){		
				alert("Form is incomplete!!");
				return false;
			}		
		}
	</script>
	</head>
	<body bgcolor="#4dff4d">
		<center>
		<h2 style="font-size:30px;">Admission Portal</h2></center><br><br>
	
		<form name = "myform" method="post" action=""><center>
		Roll NO <input type="text" name="roll"/><br><br>
		First Name <input type="text" name="first_name"><nbsp>
		Last Name <input type="text" name="last_name"><br><br>
		Address <input type="text" name="add"><nbsp>
		City <input type="text" name="city"><br><br>
		Zip-Code <input type="text" name="zip"><nbsp>
		Country <input type="text" name="country"><br><br>
		Phone Number <input type="text" name="phno"><br><br>
		Native Language <input type="text" name="lang"><nbsp>
		Religion <input type="text" name="religion"><br><br>
		Gender <input type="text" name="sex"><br><br>
		Date of Birth <input type="text" name="dob"><br><br>
		<h5>High School Information:</h5>
		High School Name <input type="text" name="school">
		Graduation Year<input type="text" name="graduation">
		12th Marks <input type="text" name="marks"><br><br>
		<h5>Parents Information</h5>
		Father's Name <input type="text" name="father_name"><nbsp>
		Mother's Name <input type="text" name="mother_name"><br><br>
		Father Occupation <input type="text" name="occupation1"><nbsp>
		Mother Occupation <input type="text" name="occupation2"><br><br>
		
		<input type="submit" name="sub" value="Submit"/><br><br></center>
		</form>
	
	</body>
</html>

