<!DOCTYPE html>
<html lang="en">
<head>
<link http-equip="Content-Type" cotent="register.html; charset-UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'users';
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error){
            die("Connection faild: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        
        $hasPasswordCertainLength = true;
        $hasPasswordAtLeastOneNumber = true;
        $passwordAreSame = true;
        
        $uname = $_POST["uname"];
        $psw = $_POST["psw"];
        $psw_repaet = $_POST["psw-repaet"];
        
        $sql = "INSERT INTO `people` (username, password) VALUES ('$uname', '$psw');";
        
        if(strlen($psw) >= 5){
            if(preg_match('@[0-9]@', $psw)){
                if ($psw == $psw_repaet){
                    //password_hash($psw, PASSWORD_BCRYPT);
                    header('Location: login.php');
                    if ($conn->query($sql) === TRUE){
                        echo "New record created seccessfully";
                    } 
                    else{
                        echo "Error: " . $sgl . "<br>" . $conn->error;
                    }
                }
                else{
                    echo "Passwords didn't match.";
                }
            }
            else{
                echo "In your password must by number.";
            }
        }
        else{
            echo "Password is too short. Password must by at least 5 characters long.";
        }
        
        $conn->close();
        ?>
</body>
</html>
