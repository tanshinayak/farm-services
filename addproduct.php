<?php
session_start(); 
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';
    $name = $_POST['name']; 
    $price=$_POST["price"];
    $days=$_POST["days"];
    $date=$_POST["date"];
    $description=$_POST["description"];
    $photo = $_POST["photo"]; 
    $username = $_SESSION['username']; 
    $sql = "Select * from user where username='$username'";
    
    $address = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($address);
    $address=$row['address'];
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO product ( username,heading, price, days, date, description, address, photo) VALUES ('$username', '$name', '$price','$days','$date','$description',
            '$address', '$photo')";
    
            if( mysqli_query($conn, $sql))
            {
                header("location: rent.php");
            }
            else{
                echo "Error occurred";
            }
        }    // end if 
?>