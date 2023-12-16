<!DOCTYPE html>
<html lang="en">
<link rel = 'stylesheet' href = 'postStyles.css' type = 'text/css'>
<SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class = "body">
    <div class = "login">
        <h1 style = 'margin-bottom: 10px; font-size: 50px;'>
            Make a Post!
        </h1>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "PostName">
            <label class = "label" for = "Post Name">Post Name</label>
        </div>
        <div class = "input-group">
            <input class = "input" required type = "text" id = "PhotoLink">
            <label class = "label" for = "Photo Link">Photo Link</label>
        </div>
        <div class = "input-group">
            <input class = "input" style = "inline-size: 200px; overflow-wrap: break-word;" required type = "text" id = "PostDescription">
            <label class = "label" for = "Post Description">Post Description</label>
        </div>
        <button style = 'cursor: pointer' onclick="pushUser()">
            Post!
        </button>
        <br>
        <a href = "browsePage.php">
            <button style = 'cursor: pointer; background-color: rgb(177, 10, 10);'>
                Cancel
            </button>
        </a>
    </div>

    <script>
        document.cookie = 'search=';    
        function pushUser()
        {
            document.cookie = 'search=';  
            let postName        = document.getElementById("PostName").value; 
            let postDescription = document.getElementById("PostDescription").value;
            let photo           = document.getElementById("PhotoLink").value;
            let userId          = (document.cookie.split(";")[1]).split('=')[1];
            console.log(postName);
            console.log(postDescription);
            console.log(photo);
            console.log(userId);
            
            
            if (photo == "")
            {
                photo = "https://cdn-icons-png.flaticon.com/512/6678/6678652.png";
            }
            
            
            ($.get({
                        url: "makepost.php?name="+postName+"&description="+postDescription+"&photo="+photo+"&user="+userId,
                        success: function(result){
                            alert(result);
                            location.href = "browsePage.php";
                        }
                        
                    }));

            


        }

    </script>
</body>
</html>