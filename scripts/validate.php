<?php
    if($_SERVER['REQUEST_URI'] == '/auth/login.php')
        if(isset($_POST['forename'])
            
        if(isset($_POST['surname'])
        if(isset($_POST['username'])
        if(isset($_POST['email'])
        if(isset($_POST['password'])
    else if($_SERVER['REQUEST_URI'] == '/auth/register.php')
    else header('Location: /shared-files/404.php');
?>
