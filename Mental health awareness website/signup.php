<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['laststname'];
    $gmail = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
       $query = "insert into users (FirstName, LastName, Email, Username, password) values ('$firstname', '$lastname', '$gmail', '$username', '$password')";

      mysqli_query($con, $query);

      echo "<script type='text/javascript'> alert('Successfully Register') </script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please enter some valid information') </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
       <form method="POST" action="login.php">
        <label for="fisrtname">First Name</label>
        <input type="text" id="firstname" name="firstname" required>
  
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
  
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
  
        <input type="submit" name="" value="Submit">
       </form>
       <p>By Clicking the sign up button, you agree to our <br>
    <a href="">terms and conditions</a> and <a href="">privacy policy</a></p>
    <p>Already have an account? <a href="login.php">Login Here</a></p>
      </div>
</body>
</html>