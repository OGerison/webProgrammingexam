<?PHP
$host = "localhost";
$user ="id16000608_otim"; 
$password = "Gerison@0506";
$database = "id16000608_adding";

$connection = new mysqli ($host,$user,$password,$database);
if ($connection -> error)
{print("ERROR");
}
else {
	print ("CONNECTION SUCCESSFUL");
}
if (isset($_POST ['SAVE'])){
	echo "<br>";	
	$names = $_POST['name'];
	$emailed = $_POST['emails'];
	$telephones = $_POST['telephone'];
	$comments = $_POST['comment'];
	
	$sql = "insert into contactus(Name,Email,Telephone,Comment)values('$names','$emailed','$telephones','$comments')";
	if ($connection -> query($sql)){
		echo"User Data inserted successfully.";
	}
else		{
	echo "Error is here." .$connection ->error;
	}
}
?>
<!DOCTYPE>
<head>
    <title>CONTACT US</title>
    <link rel="stylesheet" href="otimexamcontactus.css">
    <meta charset = "utf-8">
</head>
<div class="menu">
  <a href="index.php">Home</a>
  <a href="otimexampnp.php">Projects and Publications</a>
  <a href="otimexamcontactus.php">Contact Us</a>
</div>
<body>
<html>

<div class="main">
<div class="header">
	<div class="header-banner">
		<h1>OTIM WILLIAM GERISON</h1>
</div>
<div class="logo">
		<img src="ortis.jpg"height = "90px" width = "90px">
</div>
</div>
<ul>
  <li><a href="mylogin.php"><b>LOG IN</a></li></b>
</ul>
<form action ="otimexamcontactus.php" method = "POST">
	Name
	<input type="text" name = "name"/>
	<br>
	Email
	<input type="text" name = "emails"/>
	<br>
	Telephone 
	<input type="text" name = "telephone"/>
	<br>
	Comment
	<input type="text" name = "comment"/>
	<br>
	<input type="submit" name = "SAVE"  value = "SEND" />
	</form>	
<footer>
<b>©2021 &nbsp; &nbsp; S19B23/421 &nbsp; &nbsp; DESIGNED BY GERISON HOUSE OF DESIGN &nbsp; &nbsp; A87886</b>
	</footer>
</div>

</body>

</html>