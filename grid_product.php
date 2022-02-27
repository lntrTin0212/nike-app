<?php
    include './connect.php';
    $getType = $_POST['type'];
    // echo "$getType";
    if ($getType == 4) {
        $product = $conn->query("SELECT TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
        INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
        INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
            WHERE STT_Hinh = 1
        ");
    }
    else {
        $product = $conn->query("SELECT TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
        INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
        INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
            WHERE STT_Hinh = 1 AND hanghoa.MaLoaiHang = $getType
        ");
    }
    
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
                