<?php
$host ='localhost';
$user ='root';
$pw ='';
$conn = mysqli_connect($host, $user, $pw);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}else{
    echo "Conected Succefully\n";
}
/*$sql ="CREATE DATABASE MyStore";
if(mysqli_query($conn, $sql)) {
echo "Database created successfully";
}
else{
echo "Error creating database: ". mysqli_error($conn);
}*/
mysqli_select_db( $conn,'MyStore');
/*$sql ="CREATE TABLE customer (
customer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
echo "Table Customers created successfully";
} else {
echo "Error creating table: " . mysqli_error($conn);
}*/
?>