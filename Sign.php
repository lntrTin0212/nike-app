<?php
    session_start();
    include './connect.php';
    $product = $conn->query("SELECT TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
    INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
    INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
    WHERE STT_Hinh = 1;
    ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <link rel='stylesheet' href="./assets/css/base.css">
    <link rel='stylesheet' href="./assets/css/main.css">
    <link rel='stylesheet' href="./assets/css/modal.css">
    
    <title>Nike</title>
    <style>
        .modal {
            background-color: white;
        }
        .modal-signin,
        .modal-signup {
            border: 1px solid #e5e5e5;
        }
    </style>
</head>

<body>
    <div class="app">
            <div class="modal open" attributes="false">
                <div class="modal-container ">
                    <div class="modal-signin open-modal">
                        <div class="modal-title">
                            <p>YOUR ACCOUNT FOR<br>EVERYTHING NIKE</p>
                            <p class="title-message"></p>
                        </div>
                        <div class="modal-form">
                            <form action="./signin.php" id="signin-form" method="POST">
                                <div class="modal-input">
                                    <input type="email" placeholder="Email Address" name="signin-email" class="signin-email">
                                    <input type="password" placeholder="PassWord" name="signin-password" class="signin-password">
                                </div>
                                <div class="modal-keepsign">
                                    <div class="modal-checkbox">
                                        <input type="checkbox" id="keepSign">
                                        <label for="keepSign">keep me signed in</label>
                                    </div>
                                    <a href="" class="forgor-pass menu-link">Forgot password?</a>
                                </div>
                                <div class="modal-desc">
                                    <p>By logging in, you agree to Nike's
                                        <a href="#" class="menu-link">Privacy Policy</a> and
                                        <a href="#" class="menu-link"> Terms of Use.</a>
                                    </p>
                                </div>
                                <div class="modal-submit">
                                    <input type="submit" value="SIGN IN" class="signin-submit">
                                </div>
                                <div class="not-Amember">
                                    <p>Not a member? <a href="#" class="joinUs-link">Join Us.</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-signup">
                            <div class="modal-title">
                                <p>BECOME A NIKE MEMBER</p>
                                <p class="title-message"></p>
                            </div>
                            <div class="modal-form">
                                <form action="./signup.php" id="signup-form" method="post" >
                                    <div class="modal-input">
                                        <div class="input-container">
                                            <input type="email" placeholder="Email Address" name="email">
                                        
                                            <div class="message"></div>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="PassWord" name="password">
                                            <div class="message"></div>
                                        </div>
                                        <div class="input-container">
                                            <input type="password" placeholder="re-PassWord" name="repeat">
                                            <div class="message"></div>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="First Name" name="ho">
                                            <div class="message"></div>
                                        </div>
                                        <div class="input-container">
                                            <input type="text" placeholder="Last Name" name="ten">
                                            <div class="message"></div>
                                        </div>
                                        <div class="input-container">
                                            <input
                                                class="date-of-birth"
                                                type="date"
                                                placeholder="Date of Birth" 
                                                name="date"
                                            >
                                        </div>
                                        <div class="message"></div>
                                        <div class="gender-container">
                                            <div class="gender-male">
                                                <input type="radio" name="gender" id="male" class="signup-gender" value="Male">
                                                <i class="fas fa-check gender-icon"></i>
                                                <label for="male">Male</label>
                                            </div>
                                            <span class="margin-gender"></span>
                                            <div class="gender-female">
                                                <input type="radio" name="gender" id="female" class="signup-gender" value="Female">
                                                <i class="fas fa-check gender-icon"></i>
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-desc">
                                        <p>Create your Nike Member profile and get first access to the very best of Nike products, inspiration and community.
                                        </p>
                                    </div>
                                    <div class="modal-submit">
                                        <input type="submit" value="JOIN US">
                                    </div>
                                    <div class="not-Amember is-member">
                                        <p>Already a member? <a href="#" class="signIn-link">Sign In.</a></p>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                
            </div>
            <script src="signHandle.js"></script>
            <script src="validation.js"></script>
            <script>
                validation('signup-form')
            </script>
    </div>
</body>

</html>