<?php
  include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF- 8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uBizz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="topNav">
    <div class="left">
      <div id="navOption" class="selected"  style="cursor: pointer;"><a href="">Home</a></div>
      <div id="navOption"  style="cursor: pointer;"><a href="">Browse</a></div>
    </div>
    <div class="right">
    <div id="test"  style="cursor: pointer;"><a href="loginPage.php">Sign Up or Log In</a></div><div class="tits" id="pic"></div>
    </div>
    
  </div>
  <div class="center">
    <div class="bizz">U.Bizz</div>
    <input type="text" class="search" placeholder="Start your buying experience here!">
    
  </div>

  <?php
    $loggedIn = True;
    

  ?>
  <script type="text/javascript">
    console.log("<?php Print($result); ?>")
    const grab = "<?php Print($loggedIn);?>";
    if (grab == 1)
    {
      document.getElementById("test").innerHTML = "";
        let img = new Image();
        let profPic = document.createElement("img");
        profPic.src = "https://png.pngtree.com/background/20230522/original/pngtree-blue-abstract-wave-wallpaper-4k-picture-image_2689735.jpg";
        profPic.width = "50";
        profPic.height = "50";
        profPic.borderRadius = "100px"
       
        
        document.getElementById("pic").appendChild(profPic);
        
    }
  </script>

</body>
</html>