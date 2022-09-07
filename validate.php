<?php
session_start();

function valid(){
    $userEmail = "Ezequiel@hotmail.com";
    $userPsw = "1234";
    if ($_POST["email"] == $userEmail && $_POST["password"] == $userPsw){
        $_SESSION['email'] = $_POST['email'];
        header("location: panel.php");
        
    }
    else {
       //header("location: http://localhost/php-server-environment/index.php");
       echo '<script type="text/javascript">         
       alert("Usuario o contraseña incorrectos")         
       window.location.href="index.php"        
       </script>';
      
    }
}
valid();