<!DOCTYPE html>
<html lang="en">
<link rel = 'stylesheet' href = 'postStyles.css' type = 'text/css'>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "body">
    <div class = "login">

        <?php 
        include('../db.php');
        #$sql = "SELECT * FROM enduser WHERE userID=".$_GET['a'];
        $sql = "SELECT * FROM enduser WHERE userID=".$_GET['a'];

        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        echo " <h1 style = 'margin-bottom: 10px; font-size: 50px;'>Contact info :</h1>";
        
        echo "<div class = 'input-group' style='font-size: 17;'><label class = 'label' for = 'Post Name'>UserName: ".$row["userName"]." </label></div>";
        echo "<div class = 'input-group' style='font-size: 17px;'><label class = 'label' for = 'Post Name'>Phone number: ".$row["phoneNumber"]." </label></div>";
        echo "<div class = 'input-group' style='margin-bottom: 150px; font-size: 17px;'><label class = 'label' for = 'Post Name'>E-mail: ".$row['email']."</label></div>";
        ?>

        

        <br>
        <a href = "browsePage.php">
            <button style = 'cursor: pointer; background-color: rgb(177, 10, 10);'>
                Cancel
            </button>
        </a>
    </div>


</body>
</html>