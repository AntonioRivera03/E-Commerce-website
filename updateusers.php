<?php
    if ($_GET['action']=='addUser')
    {
        addUser();
    }
    elseif ($_GET['action'] == 'getusername')
    {
        getUsername();
    }
    
    function addUser()
    {
        include('db.php');
            
            $user = $_GET['user'];
            $password = $_GET['password'];
            $email = $_GET['email'];
            $phoneNum = $_GET['phoneNum'];
            $picture = $_GET['picture'];
            if($picture=="")
            {
                $sql = "INSERT INTO enduser(userName, email, phoneNumber, password) VALUES('{$user}', '{$email}','{$phoneNum}','{$password}')";
            
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else
            {
                $sql = "INSERT INTO enduser(userName, email, phoneNumber, password, picture) VALUES('{$user}', '{$email}','{$phoneNum}','{$password}', '{$picture}')";
            
                if ($conn->query($sql) === TRUE) {
                    echo "New record with picture created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            

    }
    function getUserName()
    {
        include('db.php');
        
        $user = $_GET['user'];
        
        
        $sql = "SELECT userID FROM enduser where userName='{$user}'";
        
        $result = $conn->query($sql);
        $row = $result ->fetch_assoc();
        $resp = $row['userID'];
        $userID = $row['userID'];
        
        if($userID > 0)
        {
            echo $userID;
        }
        else
        {
            echo 0;
        }        
    }
          
?>