<?php

    if($_GET['action'] == 'pulluser')
    {
        pullUser();
    }



    function pullUser()
    {
        include('db.php');
        $user = $_GET['user'];
        $pwd = $_GET['pwd'];

        $sql = "SELECT userID, picture from enduser where userName='$user' AND password='$pwd'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $userId=$row['userID'];
        $pic = $row['picture'];
        if($pic == '')
        {
            $pic = 'https://w7.pngwing.com/pngs/205/731/png-transparent-default-avatar-thumbnail.png';
        }
        

        if($userId>0)
        {
            echo "userId=$userId;picture=$pic;logged=true;search=";
        }
        else
        {
            echo 0;
        }


    }

?>