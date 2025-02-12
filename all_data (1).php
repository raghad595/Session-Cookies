<?php

include('./dbconn.php');

$sql="SELECT * FROM customer";

$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Data</h2>       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(mysqli_num_rows($result)>0){
            foreach($result as $row){
                echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    <td>
                    <a class='btn btn-primary' href='./update.php?id={$row['customer_id']}'>update</a>
                    </td>
                    <td>
                    <a class='btn btn-primary' href='./delete.php?id={$row['customer_id']}'>delete</a>
                    </td>
                </tr>";
            }    
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
