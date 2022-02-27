<?php
    session_start();
    include "./connect.php";
?>
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
        sleep(1);
        $_SESSION['staff-email'] = $_POST['staff-email'];
        echo "
            <div>
            <h1 class='welcome-sign'> Welcomeback ${_SESSION['staff-email']}</h1>
            </div>    
        ";
        header( "Refresh:3;URL=NV_signin.php" );

    ?>
</body>
</html>
    <!-- // header('Location: '.$_SERVER['PHP_SELF']); -->