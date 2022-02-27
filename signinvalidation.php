<?php
    session_start();
    include "./connect.php";
    if (isset($_POST['email']) && isset($_POST['password'])){
        $signin_email = $_POST['email'];
        $signin_password = $_POST['password'];
        $signin = $conn->query("SELECT email,password FROM member
        WHERE email = '$signin_email'");
        $getPassword = $signin->fetch_assoc();
        if ( $signin->num_rows > 0) {
            if (password_verify($signin_password, $getPassword['password'])) {
                echo '1';
            } else {
                echo 'mật khẩu bị sai';
            }
            // echo "1";
        }
        else {
            echo "Tài khoản hoặc mật khẩu bị sai";
        }
    }
    if (isset($_POST['nameStaff']) && isset($_POST['passwordStaff'])){
        $staff_name = $_POST['nameStaff'];
        $staff_password = $_POST['passwordStaff'];
        $staff_sign = $conn->query("SELECT TenDangNhap,MatKhau FROM nhanvien
        WHERE TenDangNhap = '$staff_name' AND matkhau = '$staff_password'");
        if ( $staff_sign -> num_rows > 0) {
            echo "2";
        }
        else {  
            echo "Tài khoản hoặc mật khẩu bị sai (NV)";
        }
    }
?>  