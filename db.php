<?php
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

?>