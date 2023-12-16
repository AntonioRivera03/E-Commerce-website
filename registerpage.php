<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="image.png">
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<link rel = 'stylesheet' href = 'login.css' type = 'text/css'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "body">
    <div class = "login">
        <h1 style = 'margin-bottom: 10px; font-size: 50px;'>
            Sign Up
        </h1>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "username">
            <label class = "label" for = "username">Username</label>
        </div>
        <div class = "input-group">
            <input type="password" class = "input" required type = "text" id = "passWord">
            <label class = "label" for = "passWord">Password</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "email">
            <label type="email" class = "label" for = "confirmPassWord">Email</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "phoneNumber">
            <label type="tel" class = "label" for = "confirmPassWord">Phone Number</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "picture">
            <label class = "label" for = "confirmPassWord">picture link</label>
        </div>
        <div class="wrong" id="incorrect"></div>
        <button type='submit' style = 'cursor: pointer' onclick="pushUser()">
            Signup
        </button>
    </div>

    <script>

        function pushUser()
        {
            
            let username = document.getElementById("username").value;
            let password = document.getElementById("passWord").value;
            let email = document.getElementById("email").value;
            let phoneNum = document.getElementById("phoneNumber").value;
            let picture = document.getElementById("picture").value;
            

            if (username =='' || password =='' || email =='' || password =='')
            {
                console.log("INCORRECT DATA");
                document.getElementById("incorrect").innerHTML = "INVALID | ENSURE ALL FIELDS HAVE INPUT";
            }
            else
            {
                //updateusers.php?user=water&action=getusername

                let resp;
                ($.get({
                    url: "updateusers.php?user="+username+"&action=getusername",
                    success: function(result){
                        console.log(result);
                        push(result);
                        alert("ACCOUNT CREATED");
                    }
                }));
        }

        function push(userID)
        {
            if (userID == 0)
                {
                    
                    ($.get({
                        url: "updateusers.php?user=realNamer&password=water&email=rapper@gmail.com&phoneNum=5252423&picture=https://i.etsystatic.com/23831015/r/il/281e8d/4657686851/il_570xN.4657686851_hg8i.jpg&action=addUser",
                        success: function(result){
                            console.log(result);
                            console.log(picture + " FROM PUSH METHOD");
                        }
                        
                    }));
                    document.getElementById("incorrect").innerHTML = "";
                    
                    
                    $.get({
                        url: "checkUser.php?user="+username+"&pwd="+password+"&action=pulluser",
                        success: function(result)
                        {
                            ckie = result.split(';');
                        
                        
                        userId = ckie[0].split("=")[1];
                        
                        if(userId > 0)
                        {
                            for (let vrble in ckie)
                            {
                                
                                document.cookie = ckie[vrble];
                            }
                            
                            location.href = "index.php";
                        }
                        else
                        {
                            location.href = "index.php";
                        }
                            }
                    })
                    
                    
                }
                else{
                    document.getElementById("incorrect").innerHTML = "THAT USERNAME ALREADY EXISTS";
                }
            }
        }

    </script>
    <?php
        include('db.php');
    ?>

</body>
</html>