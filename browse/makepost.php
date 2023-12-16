<?php

include('../db.php');

$userId = $_GET['user'];
$name = $_GET['name'];
$description = $_GET['description'];
$photo = $_GET['photo'];

$sql = "INSERT INTO post(userId, postName, postDescription, photo) VALUES($userId, '$name','$description','$photo'); ";

if ($conn->query($sql) === TRUE) {
    echo "New record with picture created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>