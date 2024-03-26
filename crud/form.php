<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP CRUD Operation</title>
</head>

<body>
 <div class="container">
    <form action="#" method="POST">
    <div class="title">
        Registration form
</div>
  <div class="form">
    <div class="input_field">
        <lable>First Name</lable>
        <input type="text" class="input" name="fname">
</div>
<div class="input_field">
        <lable>Last Name</lable>
        <input type="text" class="input" name="lname">
</div>
<div class="input_field">
        <lable>Password</lable>
        <input type="password" class="input" name="password">
</div>
<div class="input_field">
        <lable>Confirm Password</lable>
        <input type="password" class="input" name="conpassword">
</div>
<div class="input_field">
        <lable>Gender</lable>
        <div class="custom_select">
        <select name="gender">
          <option>select</option>
          <option>Male</option>
          <option>Female</option>
          
        </select>
</div>
</div>
<div class="input_field">
        <lable>Email</lable>
        <input type="text" class="input" name="email">
</div>
<div class="input_field">
        <lable>Phone Number</lable>
        <input type="text" class="input" name="phone">
</div>
<div class="input_field">
        <lable>Address</lable>
        <textarea class="textarea" name="address"></textarea>
</div>
<div class="input_field terms">
        <lable class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
        </lable>
        <p>Agree to term and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="Register" class="btn" name="register">
</div>
</div>
</form>
</div>

</body>
</html>

<?php
if($_POST['register'])
{
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO form values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo "Data Inserted into Database";
   }
   else{
    echo "Failed";
   }
}

?>