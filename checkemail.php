<?php 
    session_start();
    include "./connect.php";
    $email = addslashes($_GET['email']);
    $sql = "SELECT email from member WHERE email = '$email'";
    $stmt = $conn->query($sql);

    if ($stmt->num_rows > 0){
        echo"Email này đã được sử dụng";
    }
    else 
    {
        echo "1";
    }

  