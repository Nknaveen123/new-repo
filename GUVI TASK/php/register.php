<?php
        $UserName $_POST['UserName'];
        $password $_POST['Password']; $ConfirmPassWord $_POST['ConfirmPassWord'];
        
        //Database connection
        
        $conn =new mysqli('localhost', 'root', '', 'test');
        
        ($conn->connect_error) {
        
        die('Connection Failed:' .$conn->connect_error);
        
        }else{ $stmt $conn->prepare("insert into registration(UserName , password, Confirm Password) echo "registration Successfully..."; I
        
        values(?, ?, ?)");
        
        $stmt->bind_param("sss", $UserName , $password, $ConfirmPassword);
        $stmt->execute();
        echo "registration Successfull...";
        $stmt->close();,
        $conn->close();
        
        }
?>