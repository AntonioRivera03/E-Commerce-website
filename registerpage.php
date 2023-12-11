<!DOCTYPE html>
<html lang="en">
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
            <input class = "input" required type = "text" id = "passWord">
            <label class = "label" for = "passWord">Password</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "email">
            <label class = "label" for = "confirmPassWord">Email</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "phoneNumber">
            <label class = "label" for = "confirmPassWord">Phone Number</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "picture">
            <label class = "label" for = "confirmPassWord">picture link</label>
        </div>
        <div class="wrong" id="incorrect"></div>
        <button style = 'cursor: pointer' onclick="pushUser()">
            Signup
        </button>
    </div>

    <script>

        function pushUser()
        {
            console.log("BUTTON PUSHED");
            let username = document.getElementById("username").value;
            let password = document.getElementById("passWord").value;
            let email = document.getElementById("email").value;
            let phoneNum = document.getElementById("phoneNumber").value;
            let picture = document.getElementById("picture").value;

            if (username =='' || password =='' || email =='' || password =='')
            {
                console.log("INCORRECT DATA");
                document.getElementById("incorrect").innerHTML = "INVALID | ENSURE ALL FIELDS HAVE TEXT";
            }
            else
            {
                console.log("DATA PASSED");
                console.log(username);
                ($.get({
                    url: "updateusers.php?user="+username+"&password="+password+"&email="+email+"&phoneNum="+phoneNum+"&picture=wa",
                    success: function(result){
                        console.log(result);
                    }
                    
                }));
            }
        }

    </script>
    <?php
        include('db.php');
    ?>

</body>
</html>