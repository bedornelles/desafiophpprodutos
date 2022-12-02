<?php
$servername = "db"; //localhos:3306
$username = "root";
$password = "1q2w3e4r5t";
$dbname = "pw_exemple";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$arrayProducts =  array();
while($line = $result -> fetch_assoc()){
    array_push($arrayProducts, $line);
}

foreach ($arrayProducts as $products) {
    echo $products['idProduct'].' - ';
    echo $products['name'];
    echo '<br>';
}

$conn->close();

?>