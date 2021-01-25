<html>
<head>
<?php
include 'db.php';
$host = "localhost";
$user ="id16000608_otim"; 
$password = "Gerison@0506";
$database = "id16000608_adding";
$connection = new mysqli($host, $user, $password ,$database);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
if (isset($_POST ['SAVED'])){
$no=$_POST['no'];
$names = $_POST['name'];
$ids = $_POST['id'];
$projects = $_POST['project'];
$contacts = $_POST['contact'];

$sql = "UPDATE addition SET  NAME='$names', ID='$ids', PROJECT='$projects', CONTACT='$contacts' WHERE no='$no'";

if ($connection->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $connection->error;
}
}

if (isset($_POST ['SAVE'])){
  
	$sql = "select * from addition";
	$myquery = $connection->query($sql);
	//$result = $myquery->fetch_assoc();
	while($result = $myquery->fetch_assoc()){
		echo "<br>";
		print $result['no']."".$result['NAME']."".$result['ID']."".$result['PROJECT']."".$result['CONTACT'];
		echo"<br>";
	}
}

?>



<title>UPDATE</title>
    <link rel="stylesheet" href="update.css">
    <meta charset = "utf-8">
</head>
<body>
<div>
<form action ="update.php" method = "POST">
  No:
  <input type="text" name = "no"/>
	<br>
	Name:
	<input type="text" name = "name"/>
	<br>
	ID:
	<input type="text" name = "id"/>
	<br>
	Project Name:
	<input type="text" name = "project"/>
	<br>
	Contact:
	<input type="text" name = "contact"/>
	<br>
  <input type="submit" name = "SAVED"  value = "UPDATE" />
  <input type="submit" name = "SAVE"  value = "DISPLAY" />
    </form>	
</div>
</body>
</html>
