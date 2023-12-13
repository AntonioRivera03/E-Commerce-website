<!DOCTYPE html>
<link rel="icon" type="image/x-icon" href="image.png">

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
      <div id="navOption"  style="cursor: pointer;" onclick="window.location.href='/browse/browsePage.html'"><a >Browse</a></div>
    </div>
    <div>
    <div class="right">
    
    <div id="test"  style="cursor: pointer;"><a href="loginPage.php">Sign Up or Log In</a></div><div class="tits" id="pic" onclick="setHidden()"></div>
    
    </div>
    <br><br><div onclick="logout()" class="logoutButton"style="float: right; margin-right: 10px; background-color: #00C2FF; color: white; padding: 5px 10px; border-radius: 10px; box-shadow: 2px 2px black; border-color: black;" hidden="hidden "id="logout">Log out</div>
    
    
    
  </div>
  <div class="center">
    <div class="bizz">U.Bizz</div>
    <input type="text" class="search" placeholder="Start your buying experience here!">
    
  </div>


  <script type="text/javascript">
    
    const grab = document.cookie;
    ckies = grab.split("; ");
    check = ckies[2].includes('true');
    

    if (check == true)
    {
      data = grab.split(';');
      picture = data[1];
      document.getElementById("test").innerHTML = "";
        let img = new Image();
        let profPic = document.createElement("img");
        profPic.src = picture.split('=')[1];
        profPic.width = "50";
        profPic.height = "50";
        profPic.borderRadius = "100px"
        document.getElementById("pic").appendChild(profPic);
        
    }

    function setHidden(){
      let element = document.getElementById("logout");
      let hidden = element.getAttribute("hidden");

      if (hidden) {
       element.removeAttribute("hidden");
       
      } else {
        element.setAttribute("hidden", "hidden");
        
      }
    }
    function logout()
    {
      document.cookie = "userId=0";
      image = document.getElementById('pic');
      image.remove('img');
      document.getElementById("test").innerHTML = "Sign Up or Log In";

      let element = document.getElementById("logout");
      element.setAttribute("hidden", "hidden");
    }
  </script>

</body>
</html>