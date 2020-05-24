<!DOCTYPE html>
<html>
	<head>
		<title>Compare Cars</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="cars.css">
	</head>
	<body>
		<div class="nav">
			<li><a href="home.html">Home</a></li>
			<li><a href="abouts.html">About the site</a></li>
			<li><a href="cars.php">Compare Cars</a></li>
			<li><a href="aboutus.html">About us</a></li>

		</div>

		<div class="title">
			<h1>Compare Cars</h1>
		</div>

<?php
$link = mysqli_connect("localhost", "root", "", "carcharts");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM manufacturer";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>porsche</th>";
                echo "<th>lamborghini</th>";
				echo "<th>mclaren</th>";
                echo "<th>ferrari</th>";
				echo "<th>amg</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['porsche'] . "</td>";
                echo "<td>" . $row['mclaren'] . "</td>";
                echo "<td>" . $row['lamborghini'] . "</td>";
				echo "<td>" . $row['ferrari'] . "</td>";
				echo "<td>" . $row['amg'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No manufacturer found";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "SELECT * FROM model";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
				echo "<th>vehicleID</th>";
                echo "<th>model</th>";
                echo "<th>engine</th>";
                echo "<th>0-100</th>";
				echo "<th>price</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
				echo "<td>" . $row['vehicleID'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['engine'] . "</td>";
                echo "<td>" . $row['0-100'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
    } else{
        echo "No Vehicles found";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>

		
		
	</body>
</html>
