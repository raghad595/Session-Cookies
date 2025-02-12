<?php

include('./dbconn.php');

$id=$_GET['id'];

$query="DELETE FROM `customer` WHERE `customer_id`='$id'";

if(mysqli_query($conn,$query)){
    echo "Data Deleted Succ";
    header('Refresh:3 URL=./all_data.php');
}else{
    echo "Error: ".mysqli_error($conn);
}