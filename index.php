<?php

$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'lab1';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

$sql = " SELECT * FROM team ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jelly Bean</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

	<section class="team">
		<div class="center">
			<h1>Our Team // Jelly Bean</h1>
		</div>


		<div class="team-content">
        <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
        ?>
			<div class="box">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['image']); ?>" /> 
				<h3><?php echo $rows['name'];?></h3>
				<h5><?php echo $rows['id'];?></h5>
                <h5><?php echo $rows['email'];?></h5>
				<div class="icons">
					<a href="#"><i class="ri-twitter-fill"></i></a>
					<a href="#"><i class="ri-facebook-box-fill"></i></a>
					<a href="#"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>
            <?php
                }
            ?>
		</div>
	</section>

</body>
</html>