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
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            form {
                border: 3px solid #f1f1f1;
            }

            input[type=text], input[type=password]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
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

            .cancelbtn{
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .container{
                padding: 16px;
            }

            span.reg{
                float: right;
                padding-top: 16px;
            }

            span.psw{
                float: right;
                padding-top: 16px;
            }

            @media screen and (max-width: 300px){
                span.reg{
                    display: block;
                    float: none;
                }

                span.psw{
                    display: block;
                    float: none;
                }

                .cancelbtn{
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <?php include('./parts/header.php'); ?>
        <p></p>

        <h2>Login</h2>

        <form action="script/log_script.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="pasw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="reg">Do not have an account? <a href="register.php">Register</a>.</span>
            </div>

            <div>
                <p><?php if(isset($_GET['msg'])) echo $_GET['msg']?></p>
            </div>
            
        </form>
        
        <?php include('./parts/footer.php'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

