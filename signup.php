<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';
    $username = $_POST['uname']; 
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $password = $_POST["psw"]; 
    $cpassword = $_POST["cpsw"]; 
    $sql = "Select * from user where username='$username'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        echo $num;
        if(($password == $cpassword)) {
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO user ( username, name, phoneno, address,password) VALUES ('$username', '$name','$phone','$address',
                '$password')";
    
            if( mysqli_query($conn, $sql))
            {
                header("location: index.php");
            }
        } 
        else { 
           echo "password not match";
        }      
    }// end if 
    
   if($num>0) 
   {
      echo "Already exits";
   } 
    
}
?>