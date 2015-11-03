<html>
	<head><title> Stranica o vicevima :) </title></head>
	<body class='main'>
<div class='main'>
<?php
//echo $_GET['zanr'];
$zanr= $_GET['zanr'];
?>
<?php include 'header.php'; ?>
<style>
<?php include 'main.css'; ?>
	</style>
<div class='vicevisvi'>
	<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vicevi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nazivvica, zanr,tekst FROM tablica WHERE zanr='$zanr'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {  



        //"id: " . $row["id"]. 
echo  "<div class='vic'>"."<h1>". "Naziv vica: " . $row["nazivvica"]. "</h1>" . "<br>" . "Zanr: " . $row["zanr"]."<br> ". "<p>" . $row["tekst"]. "</p>"."<br>"."</div>";}
} else {
    echo "0 results";
}
$conn->close();

//foreach($indeks as $zanr){echo "<p>".$zanr;}




?> 
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vicevi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nazivvica, zanr,tekst FROM tablica";
$result = $conn->query($sql);

if ($result->num_rows > 0) {$indeks=array();
    // output data of each row
    while($row = $result->fetch_assoc()) {  $indeks[]=$row["zanr"];



        //"id: " . $row["id"]. 
//echo  "<div class='vic'>"."<h1>". "Naziv vica: " . $row["nazivvica"]. "</h1>" . "<br>" . "Zanr: " . $row["zanr"]."<br> ". "<p>" . $row["tekst"]. "</p>"."<br>"."</div>";
}
} else {
    echo "0 results";
}
$conn->close();
//echo $indeks[1];
$jedini=array();
$jedini=array_unique ($indeks);
//print_r($jedini);
echo "<div class='zan'>";
foreach ($jedini as $zanr){echo "<p class='zanritem'>"."<a class='zanrposebno' href='zanr.php?zanr=$zanr'>".$zanr."</a>";}
echo "</div>";
//foreach($indeks as $zanr){echo "<p>".$zanr;}




?> 
	</div>

</body>
</html>