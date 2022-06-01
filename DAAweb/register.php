<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <?php include('./parts/header.php');?>
        <p></p>
        
        <h2>Register</h2>
        <p>Please fill in this form to  create an account.</p>
        
        <form action="script/reg_script.php" method="post">
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
        <?php include('./parts/footer.php');?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
