<!DOCTYPE>
<head>
    <title>PROJECTS & PUBLICATIONS</title>
    <link rel="stylesheet" href="otimexampnp.css">
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
  
<?php
include 'db.php';
?>
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
<h3>
<b>
MY PROJECTS
</b></h3>
<?php
$sql = "select * from addition where isDeleted = 0";
	$myquery = $connection->query($sql);
    while($result = $myquery->fetch_assoc()){
          $projects[] = $result;
    }
    ?>
    <br>
    <table style="width:100%" border="2">
      <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Project</th>
        <th>Contact</th>
      </tr>
      <?php 
          foreach ($projects as $project)
              {
      ?>
      <tr>
        <td><?php echo $project['NAME']; ?></td>
        <td><?php echo $project['ID']; ?></td>
        <td><?php echo $project['PROJECT']; ?></td>
        <td><?php echo $project['CONTACT']; ?></td>
      
        <td>
      </tr>
      <?php } ?>
      
    </table>

    <footer>
<b>©2021 &nbsp; &nbsp; S19B23/421 &nbsp; &nbsp; DESIGNED BY GERISON HOUSE OF DESIGN &nbsp; &nbsp; A87886</b>
	</footer>
</div>

</body>

</html>