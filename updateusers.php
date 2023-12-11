<?php
        include('db.php');
        $user = $_GET['user'];
        $password = $_GET['password'];
        $email = $_GET['email'];
        $phoneNum = $_GET['phoneNum'];
        $picture = $_GET['picture'];
        
        $sql = "INSERT INTO enduser(userName, email, phoneNumber, password) VALUES('{$user}', '{$email}','{$phoneNum}','{$password}')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
?>