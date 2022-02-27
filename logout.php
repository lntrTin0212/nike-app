<?php
    session_start();
    sleep(1);
    $getName = $_GET['name'];
    if ($getName === $_SESSION['username']) {
        unset($_SESSION['username']);
    }
    else if ($getName === $_SESSION['staff-email']){
        unset( $_SESSION['staff-email']);
    }
    if(isset($_SERVER['HTTP_REFERER'])) {
        if ($_SERVER['HTTP_REFERER'] === 'http://localhost/cart.php'){
            header('Location: index.php');  
        }else 
        {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        
    } else {
        header('Location: index.php');  
        }
    