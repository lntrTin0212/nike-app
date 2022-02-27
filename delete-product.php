<?php
    session_start();
    include './connect.php';
    $del = $_GET['del'];
    $size = $_GET['size'];
    // echo "${del} ${size}";
    $q = $conn->query("DELETE FROM cart WHERE MSHH = '${del}' AND sizes_id = ${size}");
    if ($q === true) {
        header('Location: http://localhost/cart.php');
    }
?>