<html>
<head>
<?PHP
include 'db.php';
if (isset($_POST ['SAVE'])){
	echo "<br>";	
	$names = $_POST['name'];
	$ids = $_POST['id'];
	$projects = $_POST['project'];
	$contacts = $_POST['contact'];
	
	$sql = "insert into addition(NAME,ID,PROJECT,CONTACT)values('$names','$ids','$projects','$contacts')";
	if ($connection -> query($sql)){
		echo"User Data inserted successfully.";
	}
else		{
	echo "Error is here." .$connection ->error;
	}
}

if (isset($_POST ['SAVED'])){
	$sql = "select * from addition";
	$myquery = $connection->query($sql);
	 $result = $myquery->fetch_assoc();
	while($result = $myquery->fetch_assoc()){
		echo "<br>";
		print $result['NAME']."".$result['ID']."".$result['PROJECT']."".$result['CONTACT'];
		echo"<br>";
	}
}
?>

    <title>ADD</title>
    <link rel="stylesheet" href="add.css">
    <meta charset = "utf-8">
</head>
<body>
<div>
<form action ="add.php" method = "POST">
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
	<input type="submit" name = "SAVE"  value = "INSERT" />
	<input type="submit" name = "SAVED"  value = "DISPLAY" />
    </form>	
</div>
</body>
</html>
