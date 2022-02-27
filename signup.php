
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./assets/css/direct.css">
    <title>Nike</title>
</head>
<body>
<?php
    session_start();
    sleep(1);
    include "./connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordHash =  password_hash($password,PASSWORD_DEFAULT);
    $ho = $_POST['ho'];
    $ten = $_POST['ten'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    // print_r($_POST);
    // echo var_dump($email);
    $add = "INSERT INTO member (email,password,firstname,lastname,dob,gender)
    VALUES ('$email','$passwordHash','$ho','$ten','$date','$gender')";

    if ($conn->query($add) === TRUE) {
        echo "
        <div>
        <h1 class='welcome-sign'>Welcome to the new world, $email!</h1>
        <br>
        <h1>Please login to buy something nike</h1>
        </div>    
        ";
    header( "Refresh:3;URL=index.php" );
    }
    else {
        echo "Failure";
        echo $conn->error;
    }
    
?>
</body>
</html>