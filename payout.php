<?php
    session_start();
    include './connect.php';
    $query = $conn->query("SELECT * FROM cart");
    $name = $_POST['info-customer'];
    $company = $_POST['info-company'];
    $add = $_POST['info-address'];
    $phone = $_POST['info-phoneNum'];
    $fax = $_POST['info-faxNum'];
    $arr = $_POST['capacity'];
    $final_price = $_POST['final_price'];
    $discount = $_POST['discount'];
    $get = $conn->query("SELECT id_member FROM member
    WHERE email = '${_SESSION["username"]}' ");
    $getID = $get->fetch_assoc();
    $SoHoaDonINIT = 1;
    $SoHoaDon = $conn->query("SELECT MAX(SoDonDH) as maxSoDon FROM dathang");
    if ($SoHoaDon->num_rows>0) {
        $getSHD = $SoHoaDon->fetch_assoc();
        $SoHoaDonINIT = $getSHD['maxSoDon'] + 1; 
    }
    $insertCustomer = $conn->query("
    INSERT INTO `khachhang`(
        `id_member`,
        `HoTenKH`,
        `TenCongTy`,
        `SoDienThoai`,
        `SoFax`
    )
    VALUES(
        '${getID['id_member']}',
        '$name',
        '$company',
        '$phone',
        '$fax'
    )
    ");

    $qMSKH = $conn->query("SELECT MSKH FROM khachhang WHERE SoDienThoai = '${phone}'");
    $GetMSKH = $qMSKH->fetch_assoc();
    $getDate = date("d/m/y");
    $insertadd = $conn->query("
    INSERT INTO `diachikh`( `DiaChi`, `MSKH`)
    VALUES( '$add', '${GetMSKH['MSKH']}')
    ");
    $insertDathang = $conn->query("
    INSERT INTO dathang(
        `SoDonDH`,
        `MSKH`,
        `MSNV`,
        `NgayDH`,
        `NgayGH`,
        `TrangThaiDH`
    )
    VALUES(
        '$SoHoaDonINIT',
        '${GetMSKH['MSKH']}',
        '1',
        '$getDate',
        '1',
        '0'
    )");

    $count = 0;
    $getSD = $conn->query("SELECT MAX(SoDonDH) as SoDon FROM dathang");
    $getSDFi = $getSD->fetch_assoc();
    
    while ($listProd = $query->fetch_assoc()) {
        $capa = $_POST['capacity'][$count];
        $insertprd = $conn->query("
        INSERT INTO `chitietdathang`(
            `SoDonDH`,
            `MSHH`,
            `SoLuong`,
            `GiaDatHang`,
            `GiamGia`,
            `sizes_id`
        )
        VALUES(
            '${getSDFi['SoDon']}',
            '${listProd['MSHH']}',
            '$capa',
            '$final_price',
            '$discount',
            '${listProd['sizes_id']}'
        )
        ");
        // echo $capa;
        $count++;
    };
    
    $testing = $conn->query("SELECT cart.MSHH, TenHH, Gia, TenLoaiHang, sizes_id, url, TenHinh from cart
            INNER JOIN hinhhanghoa ON cart.MSHH = hinhhanghoa.MSHH
            WHERE id_member = '${getID['id_member']}' AND STT_Hinh = 1;
        ");
    $delcart = $conn->query("
    DELETE FROM `cart`");
    $conn->query("SELECT * FROM `soluong_specific`
        INNER JOIN sizes_specific ON sizes_specific.MSHH = soluong_specific.MSHH 
        WHERE soluong_specific.MSHH = ")
    // $conn->query("
    // UPDATE
    //     `soluong_specific`
    // SET
    //     `MSHH` = '[value-2]',
    //     `id_size_spec` = '[value-4]',
    //     `capa` = '[value-5]'
    // WHERE
    //     1 -     
    // ")
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
    <link rel='stylesheet' href="./assets/css/payout.css">

    <title>Nike</title>

</head>
<body>
    <div class="payout-main"> 
        <div class="payout-container">
            <h1>your order has been dispatched</h1>
            <?php
            while ($result = $testing->fetch_assoc()) {
                $price = $result['Gia'];
                $result1 = number_format($price, 0, ',', '.');
                echo "
                    <div class='payoutprod-wrapper'>
                        <img width='20%' src='${result['url']}${result['TenHinh']}' alt=''>
                        <div class='detail'>
                            <p class='name'>${result['TenHH']}</p>
                            <p class='size'>${result['sizes_id']}</p>
                            <p class='price'>$result1 đ</p>
                        </div>
                    </div>
                ";
            }
            ?>
            <div class="gohome">
                <a href="index.php" class="menu-link">Go To HomePage</a>
            </div>
        </div>
    </div>
</body>
</html>