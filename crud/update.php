<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql= "UPDATE crud SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
	<link rel="stylesheet"  href="style.css">
</head>
<body>

	<div class="container my-5">
	<form method="POST">
       <div class="form-group">
         <label >name</label>
         <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off">
           
        </div>
        <div class="form-group">
         <label >email</label>
         <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">
           
        </div>
        <div class="form-group">
         <label >mobile</label>
         <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" autocomplete="off">
           
        </div>
         <div class="form-group">
         <label >password</label>
         <input type="password" class="form-control"  placeholder="Enter your password" name="password" autocomplete="off">
           
        </div>
       
         <button type="submit" class="btn btn-primary " name="submit">Update</button>
    </form>
	</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	
</body>
</html>