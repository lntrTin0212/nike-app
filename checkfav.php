<?php 
    session_start();
    include "./connect.php";
    if (isset($_POST['name'])){
        if (isset($_SESSION['username'])) {
            $actual_link = $_SERVER['HTTP_REFERER'];
            $MSHH = $_POST['name'];
            $getInfo = $conn->query("SELECT ChiTiet, TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
            INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
            INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
            WHERE hanghoa.MSHH = $MSHH
            ");
            $result = $getInfo->fetch_assoc();
            $getID = $conn->query("SELECT id_member from member
                WHERE email = '${_SESSION["username"]}'");
            $id = $getID->fetch_assoc();
            $checkEx = $conn->query("SELECT MSHH FROM favor
                INNER JOIN member ON favor.id_member = member.id_member
                WHERE MSHH = $MSHH AND email = '${_SESSION['username']}' ");
            if ($checkEx -> num_rows > 0) {
                echo "1";
            }
            else {
                $testing = $conn->query("INSERT INTO favor (
                    TenHH,
                    Gia,
                    TenLoaiHang,
                    MSHH,
                    id_member
                )
                VALUES(
                    '${result["TenHH"]}',
                    '${result["Gia"]}',
                    '${result["TenLoaiHang"]}',
                    '$MSHH',
                    '${id['id_member']}'
                )");
            // echo $testing;
            echo $actual_link;
            }
            
        } else {
                echo "0";
        }
    }

if (isset($_POST['size']) && isset($_POST['mshh'])) {
    if (isset($_SESSION['username'])) {
        $getMSHH = $_POST['mshh'];
        $getSize = $_POST['size'];
        $actual_link = $_SERVER['HTTP_REFERER'];
        // $MSHH = $_POST['name'];
        $getInfo1 = $conn->query("SELECT ChiTiet, TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh,sizes_id,capa FROM hanghoa
            INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
            INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
            INNER JOIN soluong_specific ON soluong_specific.MSHH = hanghoa.MSHH
            INNER JOIN sizes_specific ON sizes_specific.MSHH = hanghoa.MSHH  
            WHERE hanghoa.MSHH = $getMSHH AND sizes_id = $getSize AND capa > 0;
        ");
        $result1 = $getInfo1->fetch_assoc();
        $getID = $conn->query("SELECT id_member from member
            WHERE email = '${_SESSION["username"]}'");
        $id = $getID->fetch_assoc();
        $checkEx = $conn->query("SELECT MSHH FROM cart
                INNER JOIN member ON cart.id_member = member.id_member
                WHERE MSHH = $getMSHH AND sizes_id = ${_POST["size"]} AND email = '${_SESSION['username']}' ");
        if ($checkEx -> num_rows > 0) {
            echo "1";
        }
        else {
            $conn->query("INSERT INTO cart (
                TenHH,
                Gia,
                TenLoaiHang,
                MSHH,
                id_member,
                sizes_id
            )
            VALUES(
                '${result1["TenHH"]}',
                '${result1["Gia"]}',
                '${result1["TenLoaiHang"]}',
                '$getMSHH',
                '${id['id_member']}',
                '$getSize'
            )");
        // echo $getInfo1;
        echo $actual_link;
        }
        
    } else {
            echo "0";
    
    }
    // echo "${_POST['mshh']},${_POST['size']}";
}

if (isset($_POST['idDelFav'])) {
    if (isset($_SESSION['username'])) {
        $del = $conn->query("DELETE FROM `favor`
                    WHERE id = ${_POST["idDelFav"]} AND id_member = '${_SESSION['username']}'");
        $getID = $conn->query("SELECT id_member from member WHERE email = '${_SESSION['username']}'");
        $ID = $getID->fetch_assoc();
        $favList = $conn->query("SELECT id,favor.MSHH, TenHH, Gia, TenLoaiHang, TenHinh, url FROM favor
        INNER JOIN hinhhanghoa ON favor.MSHH = hinhhanghoa.MSHH
        WHERE id_member = ${ID['id_member']} AND STT_Hinh = 1");
            while($showFav = $favList->fetch_assoc() ){ 
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
    }
}

if (isset($_POST['orderNum'])) {
    $getDate = date("d/m/y");
    $getNV = $conn->query("SELECT MSNV FROM nhanvien
        WHERE TenDangNhap = '${_SESSION["staff-email"]}'");
    $NV = $getNV->fetch_assoc();
    $updateDonHang = $conn->query("
    UPDATE
        `dathang`
    SET
        `MSNV` = '${NV['MSNV']}',
        `NgayGH` = '$getDate',
        `TrangThaiDH` = '1'
    WHERE
         SoDonDH = ${_POST['orderNum']}
    ");
    if ($updateDonHang === true) {
        echo "1";
    }
    else {
        echo "0";
    }
}

if (isset($_POST['color'])) {
    $getColor = $_POST['color'];
    $product = $conn->query("SELECT TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
        INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
        INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
        INNER JOIN  colors_specific ON colors_specific.MSHH = hanghoa.MSHH
            WHERE STT_Hinh = 1 AND colors_specific.name = '$getColor';
        ");
    if ($product -> num_rows > 0) {                        
        while ($row = $product -> fetch_assoc()) {
            echo "
            <div class='product-card' data-index='${row['MSHH']}'>
                <div class='product-container'>
                    <a class='product-link' href='product-detail.php?ms=${row['MSHH']}'>
                        <div class='product-img'>
                            <img src='${row['url']}${row['TenHinh']}' alt=''>
                        </div>
                        <div class='product-title'>
                            <div class='product-name'>${row['TenHH']}</div>
                            <div class='product-subtitle'>${row['TenLoaiHang']}, Color:${getColor}</div>
                            <div class='product-price'>".ToPrice($row['Gia'])."</div>
                        </div>
                    </a>
                </div>
            </div>
            ";
        }
    }
}
