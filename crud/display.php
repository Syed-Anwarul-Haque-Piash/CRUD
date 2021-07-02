<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>PHP CRUD</title>
</head>
<body>

<div class="container">
<button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add user</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  
  <?php

  $sql="SELECT * FROM crud";
  $result=mysqli_query($con,$sql);
  if($result){
     while($row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $name=$row['name'];
         $email=$row['email'];
         $mobile=$row['mobile'];
         $password=$row['password'];
         echo '<tr>
         <th scope="row">'.$id.'</th>
         <td>'.$name.'</td>
         <td>'.$email.'</td>
         <td>'.$mobile.'</td>
         <td>'.$password.'</td>
         <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
            <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
         </td>

         </tr>';
     }
  }
  
  
  
  
  ?>
  
  </tbody>
</table>
</div>
    
</body>
</html>