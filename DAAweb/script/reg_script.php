<?php
        require_once ('../database.php');
        
        $hasPasswordCertainLength = true;
        $hasPasswordAtLeastOneNumber = true;
        $passwordAreSame = true;
        $uuname = false;
        
        $uname = $_POST["uname"];
        $psw = $_POST["psw"];
        $psw_repaet = $_POST["psw-repaet"];
        
        $sql = "INSERT INTO `people` (username, password) VALUES ('$uname', '$psw');";
        $sqlu = "SELECT * FROM `people` WHERE username = '$uname'";
        $r_u = mysqli_query($conn, $sqlu);
        
        if(mysqli_num_rows(r_u) > 0){
            $uuname = true;
            echo "Username already exist.";
        }
        
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
                    echo "Passwords don't match.";
                }
            }
            else{
                echo "Your password must contain a number.";
            }
        }
        else{
            echo "Password is too short. Your password must be at least 5 characters long..";
        }
        
        $conn->close();


