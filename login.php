<?php
      
    // Include file which makes the
    // Database Connection.
    include 'config.php';
// Initialize the session
session_start();
 
//Check if the user is already logged in, if yes then redirect him to index page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Define variables and initialize with empty values
$Username = $password = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if Username is empty
   
        $Username = trim($_POST["uname"]);
        echo $Username;
    // Check if password is empty
        $password = trim($_POST["psw"]);
        // Prepare a select statement
        $sql = "SELECT `Id`, `username`, `password` FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Username);
            
            // Set parameters
            $param_Username = $Username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if Username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $Username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password==$hashed_password){
                            echo $hashed_password;
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["Id"] = $id;
                            $_SESSION["username"] = $Username;                            
                            
                            // Redirect user to index page
                            header("location: rent.php");
                            $_SESSION['status'] = 1;
                        } else{
                            // Display an error message if password is not valid
                            echo "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if Username doesn't exist
                    echo "No account found with that Username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
?>