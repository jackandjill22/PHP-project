<?php 


    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "IMS";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";



    //login user

    if(isset($_POST["login_user"])){
       $username = $_POST["username"];
       $password = $_POST["password"];

       $query = "SELECT * FROM ims_user Where username = '$username' and password = '$password'";

       $result = $conn->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            header("location:Home.php");
        }
        else{
            echo "failed";
        }
    }
?>