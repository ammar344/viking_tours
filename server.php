<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "viking_tours";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$cmd = $_REQUEST['cmd'];
switch($cmd){
    case "submit":{
        if(isset($_REQUEST['submit'])){
            $fullName = $_REQUEST['fullName'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];

            // MySQLi to insert data
            $insert_data = "INSERT INTO contact_us (name, email, message) VALUES ('$fullName', '$email', '$message')";
            $insert_query = mysqli_query($conn, $insert_data);
            if($insert_query){
                header('Location: contact.html');
            }else{
                echo"Error";
            }
        }
    }
}
?>