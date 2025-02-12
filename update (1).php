<?php

include('./dbconn.php');
$id=$_GET['id'];

$query="SELECT * from customer where customer_id='$id'";
$result=mysqli_query($conn,$query);
// print_r($result);
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['pwd'];
    if(!empty($name) && !empty($email) && !empty($pw)){
        $sql="UPDATE `customer` 
        SET `name`='$name',`email`='$email', `password`='$pw'
        WHERE `customer_id`='$id'";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "Data Updated Succ";
            header('Refresh:2 URL=./all_data.php');
        }else{
            echo "Error: ".mysqli_error($conn);
        }
    }
}

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
  <h2>Update Customer Data</h2>
  <form action="<?php $_PHP_SELF ?>" method="post">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>
</body>
</html>


