<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}
            
            * {box-sizing: border-box;}
            
            .container{
                padding: 16px;
            }
            
            input[type=text], input[type=password]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            hr{
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
            
            button{
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover{
                opacity: 0.8;
            }
        </style>
    </head>
    
    <body>
        
        <h2>Register</h2>
        <p>Please fill in this form to  create an account.</p>
        
        <form action="action_page.php" method="post">
            <div class="container">
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <label for="psw-repaet"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repaet" required>
                <hr>
                
                <p>By creating an account you agree to our <a href="#">Terns & Privacy</a>.</p>
                
                <button type="submit">Register</button>
            </div>
            
            <div  class="container" style="background-color:#f1f1f1">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
            
        </form>
    </body>
</html>