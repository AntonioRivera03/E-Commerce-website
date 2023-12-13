<!DOCTYPE html>
<html lang="en">
<link rel = 'stylesheet' href = 'login.css' type = 'text/css'> 
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<head>
    <link rel="icon" type="image/x-icon" href="image.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "plaid-background">
    <div class = "login" style='height: 500px;'>
        <h1 style = 'margin-bottom: 50px; font-size: 50px;'>
            Login
        </h1>
        <div class="input-group">
            <input class="input" required type="text" id="username">
            <label class="label" for ="username">Username</label>
        </div>
        <div class = "input-group">
            <input type="password" class = "input" required type = "text" id = "password">
            <label class = "label" for = "passWord">Password</label>
        </div>
        <button style = 'cursor: pointer' onclick="login()">
            Login
        </button>
        <div class="wrong" id="incorrect"></div>
        <h2 style = 'font-size: 18px;'>
            <a href="registerpage.php" style = "color: #00c2ff;">Don't Have an account? <br> Sign Up!</a>
        </h2>
    </div>
    <script src='cookieData.js'></script>
    <script>
        
        function login()
        {
            let user = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            
            $.get({
                url: "checkUser.php?user="+user+"&pwd="+password+"&action=pulluser",
                success: function(result)
                {
                    ckie = result.split(';');
                    console.log(ckie);
                    
                    userId = ckie[0].split("=")[1];
                    console.log(userId);
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
                        document.getElementById("incorrect").innerHTML = "USER DOES NOT EXIST OR INFO IS WRONG";
                    }
                }
            })

        }
        
    
    </script>
</body>
</html>
