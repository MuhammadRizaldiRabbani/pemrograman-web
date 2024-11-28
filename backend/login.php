<?php
        if(isset($_POST['email'])  || isset($_POST['password'])) 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            if($email == 'rizal123@admin.com' && $password == '12345') {
                header('location: ./../dashboard.php');
            } else {
                echo "email atau password salah";
            }
        }
    ?>