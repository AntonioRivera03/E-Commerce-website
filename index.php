<!DOCTYPE html>
<link rel="icon" type="image/x-icon" href="image.png">

<html lang="en">
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<script>
  
</script>

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
      <div id="navOption"  style="cursor: pointer;" onclick="window.location.href='/browse/browsePage.php'"><a >Browse</a></div>
    </div>
    <div>
    <div class="right">
    
    <div   style="cursor: pointer;"><a id="test" href="loginPage.php">Sign Up or Log In</a></div><div id="pic" onclick="setHidden()"></div>
    
    </div>
    <br><br><div onclick="logout()" class="logout" hidden="hidden "id="logout">Log out</div>
    
    
    
  </div>
  <div class="center">
    <div class="bizz">U.Bizz</div>
    <input type="text" class="search" id="searching" placeholder="Start your buying experience here!"><button style="margin-left: 120px;" onclick="doSearch()">SEARCH</button>
  </div>


  <script type="text/javascript">
    check = false;
    
    if(document.cookie != "")
    {
      
      grab = document.cookie;
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
    }


    function doSearch()
    {
      let input = document.getElementById('searching').value;

      document.cookie = 'search='+input;

      location.href = "/browse/browsePage.php";
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
      document.cookie = "picture = ''";
      document.cookie = "logged = false";
      document.cookie = "search=''";
      image = document.getElementById('pic');
      image.remove('img');
      document.getElementById("test").innerHTML = "Sign Up or Log In";

      let element = document.getElementById("logout");
      element.setAttribute("hidden", "hidden");
    }

    
  </script>
  
  <!--
  <script>
    console.log("GELLO");
    document.getElementById("searching").onkeyup = function() {
        console.log(this.value);
    }
  </script>-->

</body>
</html>