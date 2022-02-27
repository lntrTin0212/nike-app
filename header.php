<?php
    //  $price = $row['Gia'];
    //  $priceFinal = number_format($price,0,',','.');
    // function formatPrice($element) {
    //     return number_format($element,0,',','.');
    // }
?>
<div class="header">

    <div class="header-signin">
        <a href="./index.php">
            <svg class="header-jordan" height="24px" width="24px" fill="#111" viewBox="0 0 26 32">
                <path d="M14.4 5.52v-.08q0-.56.36-1t.92-.44 1 .36.48.96-.36 1-.96.4l-.24.08.08.12-.08.44-.16 1.28q.08.08.08.16l-.16.8q-.08.16-.16.24l-.08.32q-.16.64-.28 1.04t-.2.64V12q-.08.4-.12.64t-.28.8q-.16.32 0 1.04l.08.08q0 .24.2.56t.2.56q.08 1.6-.24 2.72l.16.48q.96.48.56 1.04l.4.16q.96.48 1.36.84t.8.76q.32.08.48.24l.24.08q1.68 1.12 3.36 2.72l.32.24v.08l-.08.16.24.16h.08q.24.16.32.16h.08q.08 0 .16-.08l.16-.08q.16-.16.32-.24h.32q.08 0 0 .08l-.32.16-.4.48h.56l.56.08q.24-.08.4-.16l.4-.24q.24-.08.48.16h.08q.08.08-.08.24l-.96.88q-.4.32-.72.4l-1.04.72q-.08.08-.16 0l-.24-.32-.16-.32-.2-.28-.24-.32-.2-.24-.16-.2-.32-.24q-.16 0-.32-.08l-1.04-.8q-.24 0-.56-.24-1.2-1.04-1.6-1.28l-.48-.32-.96-.16q-.48-.08-1.28-.48l-.64-.32q-.64-.32-.88-.32l-.32-.16q-.32-.08-.48-.16l-.16-.16q-.16 0-.32.08l-1.6.8-2 .88q-.8.64-1.52 1.04l-.88.4-1.36.96q-.16.16-.32 0l-.16.16q-.24.08-.32.08l-.32.16v.16h-.16l-.16.24q-.16.32-.32.36t-.2.12-.08.12l-.16.16-.24.16-.36-.04-.48.08-.32.08q-.4.08-.64-.12t-.4-.6q-.16-.24.16-.4l.08-.08q.08-.08.24-.08h.48L1.6 26l.32-.08q0-.16.08-.24.08-.08.24-.08v-.08q-.08-.16-.08-.32-.08-.16-.04-.24t.08-.08h.04l.08.24q.08.4.24.24l.08-.16q.08-.16.24-.16l.16.16.16-.16-.08-.08q0-.08.08-.08l.32-.32q.4-.48.96-.88 1.12-.88 2.4-1.36.4-.4.88-.4.32-.56.96-1.2.56-.4.8-.56.16-.32.4-.32H10l.16-.16q.16-.08.24-.16v-.4q0-.4.08-.64t.4-.24l.32-.32q-.16-.32-.16-.72h-.08q-.16-.24-.16-.48-.24-.4-.32-.64h-.24q-.08.24-.4.32l-.08.16q-.32.56-.56.84t-.88.68q-.4.4-.56.88-.08.24 0 .48l-.08.16h.08q0 .16.08.16h.08q.16.08.16.2t-.24.08-.36-.16-.2-.12l-.24.24q-.16.24-.32.2t-.08-.12l.08-.08q.08-.16 0-.16l-.64.16q-.08.08-.2 0t.04-.16l.4-.16q0-.08-.08-.08-.32.16-.64.08l-.4-.08-.08-.08q0-.08.08-.08.32.08.8-.08l.56-.24.64-.72.08-.16q.32-.64.68-1.16t.76-.84l.08-.32q.16-.32.32-.56t.4-.64l.24-.32q.32-.48.72-.48l.24-.24q.08-.08.08-.24l.16-.16-.08-.08q-.48-.4-.48-.72-.08-.56.36-.96t.88-.36.68.28l.16.16q.08 0 .08.08l.32.16v.24q.16.16.16.24.16-.24.48-.56l.4-1.28q0-.32.16-.64l.16-.24v-.16l.24-.96h.16l.24-.96q.08-.24 0-.56l-.32-.8z">
                </path>
            </svg>
        </a>
        <div class="list-sign">
            <a href="#" class="header-link header-map">Map</a>
            <?php
            if (isset($_SESSION['username'])) {
                echo ("<a href='#' class='header-link header-user'>${_SESSION['username']}</a>");
                echo ("<a href='logout.php?name=${_SESSION['username']}' class='header-link '>Log out</a>");
                echo (" <a href='#' class='header-link link-signup' style='display:none'>join us</a>");
                echo (" <a href='#' class='header-link link-signin' style='display:none'>sign in</a>");
            } else if (!isset($_SESSION['username'])) {
                echo (" <a href='#' class='header-link link-signup'>join us</a>");
                echo (" <a href='#' class='header-link link-signin'>sign in</a>");
            }
            ?>

        </div>
    </div>
    <div class="header-container">

        <div class="header-menu">
            <div class="nike-logo">
                <svg class="pre-logo-svg" height="60px" width="60px" fill="#111" viewBox="0 0 69 32">
                    <path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z">
                    </path>
                </svg>
                <p class="collab">Collab with</p>
                <img src="./assets/img/Logo.png" alt="">
            </div>
            <div class="search-container">
                <div class="search">

                </div>
                <div class="fav">

                    <i class="fas fa-truck fav-icon">
                        <span class="fav-capa stt-count">
                        </span>
                    </i>
                    <div class="fav-pop">
                        <div class="fav-pop-container STT_Count">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $getIDstt = $conn->query("SELECT id_member from member WHERE email = '${_SESSION['username']}'");
                                $IDSTT = $getIDstt->fetch_assoc();
                                $STTLIST = $conn->query("SELECT SoDonDH,NgayDH, TrangThaiDH FROM dathang
                                        INNER JOIN khachhang ON dathang.MSKH = khachhang.MSKH
                                        INNER JOIN member ON member.id_member = khachhang.id_member 
                                        WHERE member.id_member = ${IDSTT['id_member']}");
                                            while ($result_truck = $STTLIST->fetch_assoc()){
                                                if($result_truck['TrangThaiDH'] == 0) {
                                                    $fill = 'rgb(255, 106, 106)';
                                                }
                                                else if ($result_truck['TrangThaiDH'] == 1) {
                                                    $fill = 'rgb(91, 206, 80)';
                                                }
                                    echo "
                                        <div class='fav-pop--wrapper'>
                                            <a class='fav-pop-wrapper--link menu-link' href=''>
                                                <div class='fav-pop-detail deliver-container'>
                                                    <p class='fav-pop-title'>STT: ${result_truck['SoDonDH']}</p>
                                                    <p class='fav-pop-title'>Ngày DH:${result_truck['NgayDH']}</p>
                                                    <div class='status'>
                                                            <svg class='pre-logo-svg status-logo' height='36px' width='36px'
                                                            fill='$fill' viewBox='0 0 69 32'>
                                                                <path
                                                                    d='M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z'>
                                                                </path>
                                                            </svg>
                                                        </div>
                                                </div>
                                            </a>
                                    </div>
                                    ";
                                                
                                    }
  
                            }
                             else {
                                echo "You need to sign in to see this";
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="fav">
                    <i class="far fa-heart fav-icon">
                        <span class="fav-capa">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $get = $conn->query("SELECT id_member FROM member
                                WHERE email = '${_SESSION["username"]}' ");
                                $getID = $get->fetch_assoc();
                                $favCap = $conn->query("SELECT id FROM favor WHERE id_member = ${getID["id_member"]}");
                                echo "$favCap->num_rows";
                            } else {
                                echo "0";
                            }
                            ?>
                        </span>
                    </i>
                    <div class="fav-pop">
                        <div class="fav-pop-container">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $getID = $conn->query("SELECT id_member from member WHERE email = '${_SESSION['username']}'");
                                $ID = $getID->fetch_assoc();
                                $favList = $conn->query("SELECT id,favor.MSHH, TenHH, Gia, TenLoaiHang, TenHinh, url FROM favor
                                        INNER JOIN hinhhanghoa ON favor.MSHH = hinhhanghoa.MSHH
                                        WHERE id_member = ${ID['id_member']} AND STT_Hinh = 1");
                                while ($showFav = $favList->fetch_assoc()) {
                                    echo "
                                             <div class='fav-pop--wrapper'>
                                                <a class='fav-pop-wrapper--link menu-link' href='product-detail.php?ms=${showFav['MSHH']}'>
                                                    <img src='${showFav["url"]}${showFav["TenHinh"]}', alt=''>
                                                    <div class='fav-pop-detail'>
                                                        <p class='fav-pop-title'>
                                                        ${showFav['TenHH']}
                                                        <span class='get-del' style='visibility: hidden;'>${showFav['MSHH']}</span>
                                                        </p>
                                                        <p class='fav-pop-price'>${showFav['Gia']}</p>
                                                    </div>
                                                    </a>
                                                <div class='delete-container' data-index='${showFav["id"]}'>
                                                    <a class='menu-link' href='#'>
                                                        <i class='fas fa-times delete-times'></i>
                                                    </a>
                                                </div>
                                              </div>
                                            ";
                                }
                            } else {
                                echo "You need to sign in to see this";
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="capacity">
                    <i class="fas fa-shopping-basket capa-icon">
                        <span class="fav-capa"><?php
                                                if (isset($_SESSION['username'])) {
                                                    $get = $conn->query("SELECT id_member FROM member
                                WHERE email = '${_SESSION["username"]}' ");
                                                    $getID = $get->fetch_assoc();
                                                    $CartCap = $conn->query("SELECT id FROM cart
                            WHERE id_member = ${getID["id_member"]}");
                                                    echo "$CartCap->num_rows";
                                                } else {
                                                    echo "0";
                                                }
                                                ?></span>
                    </i>
                    <div class="fav-pop">
                        <div class="fav-pop-container">

                            <?php
                            if (isset($_SESSION['username'])) {
                                // $getID = $conn->query("SELECT id_member from member WHERE email = '${_SESSION['username']}'");
                                // $ID = $getID->fetch_assoc();
                                $ListCapa = $conn->query("SELECT cart.MSHH, TenHH, Gia, TenLoaiHang, TenHinh, sizes_id, url FROM cart
                                        INNER JOIN hinhhanghoa ON cart.MSHH = hinhhanghoa.MSHH
                                        WHERE id_member = ${ID['id_member']} AND STT_Hinh = 1");
                                while ($showCapa = $ListCapa->fetch_assoc()) {
                                    echo "
                                            <div class='fav-pop--wrapper'>
                                                <a class='fav-pop-wrapper--link menu-link' href='product-detail.php?ms=${showCapa['MSHH']}'>
                                                    <img src='${showCapa["url"]}${showCapa["TenHinh"]}'>
                                                    <div class='fav-pop-detail'>
                                                        <p class='fav-pop-title'>${showCapa['TenHH']}</p>
                                                        <p class='fav-pop-price '>Size: <span class='fav-pop-size'>${showCapa['sizes_id']}</span></p>
                                                        <p class='fav-pop-price'>".ToPrice($showCapa['Gia'])."đ</p>
                                                    </div>
                                                </a>
                                            </div>
                                            ";
                                }
                                if ($ListCapa->num_rows > 0) {
                                    echo "
                                            <div class='footer-capa'>
                                                <a href='cart.php' class='menu-link'>View Details</a>
                                            </div>
                                            
                                            ";
                                }
                                else
                                 {
                                    echo "<h3>Chưa có sản phẩm nào</h3>";
                                 }
                            } else {
                                echo "You need to sign in to see this";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title">
            <p>scroll down to see the product!</p>
        </div>

    </div>
</div>
<script>
    
    document.querySelector('.pre-logo-svg').onclick = function() {
        window.location.href = './index.php'; 
    }
    let scrollbody = 0
    document.body.onscroll = function() {
    let result = document.documentElement.scrollTop
    if (result > scrollbody){
        console.log("DOWN")
        $('.header-fixed').style.top = '-32px'

     } else {
        console.log("UP")
        $('.header-fixed').style.top = '0px'
        // upscroll code
     }
     scrollbody = document.documentElement.scrollTop
}
    let deliver = document.querySelector('.STT_Count').childElementCount
    document.querySelector('.stt-count').innerHTML = deliver
    
    
</script>