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
    <link rel='stylesheet' href="./assets/css/footer.css">
    
    <title>Nike</title>

</head>

<body>
    <div class="app">
        <div class="modal " attributes="false">
            <div class="modal-container">
                <i class="fas fa-times modal-time"></i>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15715.067930463327!2d105.76574731183959!3d10.036077643338615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a062a1bb236883%3A0x6045b0eb4472c088!2zTklLRSBTZW5zZSBDaXR5IEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1637636203175!5m2!1svi!2s"
                        width="1200"
                        height="700"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"></iframe> 
                </div>
                <div class="modal-signin">
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
                <div class="modal-signup ">
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
        <!-- IMPORT HEADER -->
        <div class="header-fixed">
        <?php
            include "./header.php";
        ?>  
        </div>
        <!-- END IMPORT HEADER -->
        <div class="main">
            <div class="menu-main">
                <div class="menu-container">
                    <div class="jordan-logo">
                        <svg class="menu-jordan" fill="#111" viewBox="0 0 26 32">
                            <path
                                d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z">
                            </path>
                        </svg>
                    </div>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <p href="" class="menu-link">New releases</p>
                        </li>
                        <li class="menu-item">
                            <p href="" class="menu-link">Jordan Sport</p>
                        </li>
                        <li class="menu-item">
                            <p href="" class="menu-link">Men</p>
                        </li>
                        <li class="menu-item">
                            <p href="" class="menu-link">Women</p>
                        </li>
                        <li class="menu-item">
                            <p href="" class="menu-link">Kids</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="banner-container">
                <div class="banner">
                </div>
                <div class="banner-title-container">
                    <p class="banner-desc">"Family Tree"</p>
                    <p class="banner-title">JORDAN ZION 1</p>
                </div>
            </div>
            <div class="new-release">
                <div class="new-release-title">
                    <p>Shop New Releases </p>
                    <div class="btn-wrapper">
                        <p class="left">&lt;</p>
                        <p class="right">&gt;</p>
                    </div>
                </div>
                <div class="new-release-container">
                    <?php 
                        $new = $conn->query("SELECT TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
                            INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
                            INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
                            WHERE STT_Hinh = 1 AND hanghoa.MSHH < 11;");
                        while ($newRe = $new -> fetch_assoc()) {
                            echo "
                            <div class='new-release-item'>
                                <a class='release-link' href='product-detail.php?ms=${newRe['MSHH']}'>
                                    <img  src='${newRe['url']}${newRe['TenHinh']}'
                                        class='new-release-img' />
                                    <div class='new-release-about'>
                                        <div class='release-title-container'>
                                            <p class='new-release-name'>${newRe['TenHH']}</p>
                                            <p class='new-release-type'>${newRe['TenLoaiHang']}</p>
                                        </div>
                                        <p class='new-release-price'>".ToPrice($newRe['Gia'])."đ</p>
                                    </div>
                                </a>
                            </div>
                            ";
                        }
                    ?>
                    


                </div>
            </div>
            <div class=" bannerDesc-container">
                <div class="Desc-logo">
                    <svg class="pre-logo-svg" height="60px" width="60px" fill="#fff" viewBox="0 0 69 32">
                        <path
                            d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="main-product">
                <div class="main-top">
                    <div class="top-breadcrumb">
                        <!-- <p>Jordan <span>/</span> New Release</p> -->
                        <div class="top-title">
                            <p>New Nike's stuff (<span class="product-capa"><?php echo"$product->num_rows"; ?></span>)</p>
                        </div>
                    </div>
                    <div class="top-detail">
                        <div class="top-filter">
                            <p>sort by</p>
                            <p class="product-sortBy"></p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="main-menu">
                        <ul class="main-type">
                            <li class="type-title">
                                <a  data-index="4" href="#" class="type-link">ALL</a>
                            </li>
                            <li class="type-title">
                                <a  data-index="0" href="#" class="type-link">Shoes</a>
                            </li>
                            <li class="type-title">
                                <a  data-index="1" href="#" class="type-link">Slippers</a>
                            </li>
                            <li class="type-title">
                                <a  data-index="2" href="#" class="type-link">Pants</a>
                            </li>
                            <li class="type-title">
                                <a  data-index="3" href="#" class="type-link">Tees</a>
                            </li>
                        </ul>
                        <div class="main-type main-gender border-menu">
                            <div class="input-gender input-menu">
                                <input type="checkbox" name="Gender" id="Unisex" value="Unisex" selected='true'>
                                <label for="Unisex">Unisex</label>
                            </div>
                        </div>
                        <div class="main-type main-colour border-menu">
                            <div class="main-title">
                                Colour
                            </div>
                            <div class="colour-grid">
                                <div class="colour" id="orange" style="background-color:#f36b26;"></div>
                                <div class="colour" id="blue" style="background-color:#1790c8 ;"></div>
                                <div class="colour" id="red" style="background-color:#e7352b"></div>
                                <div class="colour" id="white" style="background-color:white ;border: 1px solid grey;"></div>
                                <div class="colour" id="pink" style="background-color:#f0728f"></div>
                                <div class="colour" id="grey" style="background-color:#808080"></div>
                                <div class="colour" id="purple" style="background-color: #8d429f;"></div>
                                <div class="colour" id="rattan" style="background-color: #bda585;"></div>
                                <div class="colour" id="multi" style="background-color: #b4deef"></div>
                                <div class="colour" id="black" style="background-color:black ;"></div>
                                <div class="colour" id="brown" style="background-color: #825d41;"></div>
                                <div class="colour" id="green" style="background-color: #7bba3c;"></div>
                            </div>
                        </div>
                        
                        <div class="main-type main-img">
                            <div class="img-container">
                                <img src="./assets/img/poster_0.png" alt="">
                            </div>
                            <div class="img-container">
                                <img src="./assets/img/poster_1.png" alt="">
                            </div>
                            <div class="img-container">
                                <img src="./assets/img/poster_3.jpg" alt="">
                            </div>
                            <div class="img-container">
                                <img src="./assets/img/poster_4.jpg" alt="">
                            </div>
                            
                        </div>    
                    </div>

                    <div class="product-grid">
                        <?php
                            if ($product -> num_rows > 0) {    
                                                   
                                while ($row = $product -> fetch_assoc()) {
                                    $getColor = $conn->query("SELECT name
                                    FROM colors_specific
                                    INNER JOIN hanghoa ON colors_specific.MSHH = hanghoa.MSHH
                                    WHERE hanghoa.MSHH = ${row['MSHH']};
                                    ");
                                    // $fav = array();
                                    $textColor ="";
                                    while ($color = $getColor -> fetch_assoc()) {
                                        $textColor .= "${color['name']} // ";
                                    };
                                     $price = $row['Gia'];
                                     $priceFinal = number_format($price,0,',','.');
                                    echo "
                                    <div class='product-card' data-index='${row['MSHH']}'>
                                        <div class='product-container'>
                                            <a class='product-link' href='product-detail.php?ms=${row['MSHH']}'>
                                                <div class='product-img'>
                                                    <img src='${row['url']}${row['TenHinh']}' alt=''>
                                                </div>
                                                <div class='product-title'>
                                                    <div class='product-name'>${row['TenHH']}</div>
                                                    <div class='product-subtitle'>${row['TenLoaiHang']}</div>
                                                    <div class='product-subtitle'>
                                                        Colors: ".substr($textColor, 0, -1)."
                                                    </div>
                                                    <div class='product-price'>${priceFinal}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    ";
                                }
                            }
                            else  {
                                echo '0';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
        <div class="gotoTop">
            <i class="fas fa-arrow-up"></i>
        </div>

    </div>
    <script src="App.js"></script>
    <script src="slideImg.js"></script>
    <script src="validation.js"></script>
    <script>
        validation('signup-form')
    </script>

   
</body>

</html>