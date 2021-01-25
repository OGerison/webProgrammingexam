<!DOCTYPE>
<html>
<?php 
include 'db.php';
define('user','id16000608_otim');
define('password','Gerison@0506');
define('host','localhost');
define('database','id16000608_adding');

try{
    $conn = new PDO("mysql:host=".host.";dbname=".database,user,password);
}
catch(PDOException $e){
    exit("Error: ".$e->getMessage());
}
       

        if(isset($_POST['login'])){
            $username =$_POST['userr'];
            $ppassword = $_POST['passs'];
            $query = $conn->prepare("select * from mylogin where name = '$username'");
            $query->bindParam("name",$username, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(!$result){
                echo 'INVALID DETAILS';
            }
            else{
                if($ppassword === $result['password']){
                    echo 'Logged in successfully.';
                    header("Location: admin.php");
                }
                else{
                    echo 'Wrong credentials. TRY AGAIN!!';
                }
            }
        }
   
?>
<head>
	<title>LOG IN</title>
	 <link rel="stylesheet" a href="mylogin.css">
</head>


<body>
	<div class="container">
	<img src="ortis.jpg"/> 
    <form action ="mylogin.php" method = "POST">
			<div class="form-input">
				<input type="text" name="userr" placeholder="User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="passs" placeholder="Password"/>
			</div>
			<input type="submit" value="LOGIN" name="login" class="btn-login"/>
		</form>
	</div>
</body>
</html>