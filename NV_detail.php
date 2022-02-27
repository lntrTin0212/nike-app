<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,700&display=swap" rel="stylesheet">

    <link rel='stylesheet' href="./assets/css/base.css">
    <link rel='stylesheet' href="./assets/css/cart.css">
    <link rel='stylesheet' href="./assets/css/staff.css">
    <link rel='stylesheet' href="./assets/css/footer.css">

    <title>Cart</title>

</head>

<body>
    <div class="app">
        <div class="header">
            <div class="header-signin">
                <svg class="header-jordan" height="24px" width="24px" fill="#111" viewBox="0 0 26 32">
                    <path d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z">
                    </path>
                </svg>
                <div class="list-sign">
                    <?php
                    if (isset($_SESSION['staff-email'])) {
                        echo "
                        <a href='#' class='header-link link-signin'>welcome ${_SESSION['staff-email']}</a>     
                        <a href='logout.php?name=${_SESSION['staff-email']}' class='header-link link-signin'>
                        log out
                        </a>     
                        ";
                    } else {
                        echo "<a href='#' class='header-link link-signin'>sign in</a>";
                    }
                    ?>
                </div>
            </div>
            <div class="header-container">

                <div class="header-menu">
                    <div class="nike-l  ogo">
                        <svg class="pre-logo-svg" height="60px" width="60px" fill="#111" viewBox="0 0 69 32">
                            <path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="title">
                    <a class="menu_link" href="index.php">Click here to go back the user's area</a>
                </div>

        </div>
        </div>
            <div class="cart-wrapper">
                <div class="cart-container">
                    <form action="" method="POST" class="form-payout" id="">
                        <div class="bag">
                            <p>ORDER #<span class="sd"><?php echo $_GET['sd'];?></span></p>
                            <?php
                            $get = $conn->query("
                            SELECT idChiTiet, hanghoa.MSHH, SoLuong, sizes_id,dathang.MSKH,TenHH,url,TenHinh,Gia, GiaDatHang FROM chitietdathang
                                INNER JOIN dathang ON dathang.SoDonDH = chitietdathang.SoDonDH
                                INNER JOIN diachikh ON diachikh.MSKH = dathang.MSKH
                                INNER JOIN hanghoa ON hanghoa.MSHH = chitietdathang.MSHH
                                INNER JOIN hinhhanghoa ON hanghoa.MSHH = hinhhanghoa.MSHH
                                WHERE chitietdathang.SoDonDH = ${_GET['sd']} AND STT_Hinh = 1;
                            ");
                            while ($result = $get->fetch_assoc()) {
                                echo "
                                    <div class='product-wrapper'>
                                        <img width='20%' src='${result['url']}${result['TenHinh']}' alt=''>
                                    <div class='product-info'>
                                        <div class='product-name'>
                                            <a class='menu-link' href=''>${result["TenHH"]}</span></a>
                                            <p class='product-price'>".ToPrice($result['Gia'])."đ</p>
                                        </div>
                                        <div class='product-select'>
                                            <div class='product-size'>
                                                <p>Size: ${result['sizes_id']}</p>
                                            </div>
                                            <div class='product-quantity'>
                                                <p>Quantity: ${result['SoLuong']}</p>
                                            </div>
                                        </div>
                                        <div class='product-button'>
                                        </div>
                                    </div>
                                </div>
                                    ";
                            }
                            ?>
                        </div>
                        <div class="summary">
                            <p>summary</p>
                            <?php
                                $getInfo = $conn->query("
                                    SELECT HoTenKH, TenCongTy, SoDienThoai, SoFax, DiaChi,email FROM khachhang
                                        INNER JOIN dathang ON dathang.MSKH = khachhang.MSKH
                                        INNER JOIN diachikh ON diachikh.MSKH = dathang.MSKH
                                        INNER JOIN member ON member.id_member = khachhang.id_member
                                        WHERE dathang.SoDonDH = ${_GET['sd']};
                                ");
                                $Gia = $conn->query("SELECT GiaDatHang, GiamGia FROM chitietdathang
                                WHERE SoDonDH = ${_GET['sd']};
                                ");
                                $final_price = $Gia -> fetch_assoc();
                                $info = $getInfo -> fetch_assoc();
                                echo "
                                <div class='info-container'>
                                    <p class='title-message'>Vui lòng nhập đúng định dạng</p>
                                    <p>Customer ${info['email']}</p>
                                    <input type='text' id='info-customer' name='info-customer' placeholder='${info['HoTenKH']}' require>
                                    <div class='message'></div>
                                    <input type='text' id='info-company' name='info-company'  name='info-company' placeholder='${info['TenCongTy']}'>
                                    <div class='message'></div>
                                    <input type='text' id='info-address' name='info-address' placeholder='${info['DiaChi']}'>
                                    <div class='message'></div>
                                    <input type='text' id='info-phoneNum' name='info-phoneNum' placeholder='${info['SoDienThoai']}'>
                                    <div class='message'></div>
                                    <input type='text' id='info-faxNum' name='info-faxNum' placeholder='${info['SoFax']}'>
                                    <div class='message'></div>
                                </div>
                                <div class='total-price'>
                                    <p>Discount: </p>
                                    <p class='deli-price'>
                                        ".$final_price['GiamGia']."%
                                    </p>
                                </div> 
                                <div class='final-total'>
                                    <p>Total</p>
                                    <p class='final'>
                                    ".ToPrice($final_price['GiaDatHang'])."đ
                                    </p>
                                </div>
                                <div class='checkout-btn'>
                                    <button type='submit' class='submit-nvCheck'>OK</button>
                                </div>
                                ";
                            ?>
                    </form>

                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <script src="NV_checkout.js"></script>
</body>

</html>