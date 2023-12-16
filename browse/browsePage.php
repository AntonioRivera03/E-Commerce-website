<!DOCTYPE html>
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet" href="browsePage.css">
</head>
<body>
    <div class="topnav">
        <div class="topnav-centered">
          <input placeholder="Start your buying experience here!" id="searching"></input>
          
        </div>
        
        <a href="postPage.php">POST</a>
        <a href="../index.php">HOME</a>
        <div class="topnav-right">
          <p class = "logo" style="cursor: pointer;" onclick="doSearch()">U.Bizz</p>
        </div>
    </div>
    <?php
    include('../db.php');

    $search = $_COOKIE['search'];

    $sql = "SELECT  userId, postName, postDescription, photo, userId FROM post where postName like '%$search%'";
    $result = $conn -> query($sql);

    if($result->num_rows < 1){
      echo "<h1>NO POSTS FOUND</h1>";
    }
    while ($row = $result->fetch_assoc())
      {
        echo "<a href='contact.php?a=".$row['userId']."'><div class = 'listingDiv' style = 'display: flex;'>";
        echo "<div><img src = ".$row['photo']."></div>";
        echo "<div class = 'listHeading'><h1>".$row['postName']."</h1><p1>".$row['postDescription']."</p1></div></div></a>";
      }
    ?> 
    <script>
    function doSearch()
    {
      let input = document.getElementById('searching').value;

      document.cookie = 'search='+input;

      location.href = "/browse/browsePage.php";
    }



    </script>
</body>
</html>