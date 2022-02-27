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
    <!-- <link rel='stylesheet' hrsef="./assets/css/main.css"> -->
    <link rel='stylesheet' href="./assets/css/modal.css">
    <link rel='stylesheet' href="./assets/css/product-detail.css">
    <link rel='stylesheet' href="./assets/css/footer.css">

    <title>Nike</title>

</head>

<body>
    <?php
    $query = $conn->query("SELECT ChiTiet, TenHH, Gia, TenLoaiHang, hanghoa.MSHH, url, TenHinh FROM hanghoa
        INNER JOIN loaihanghoa ON hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang
        INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
        WHERE hanghoa.MSHH = ${_GET['ms']};
        ");
    $result = $query->fetch_assoc();
    ?>
    <div class="app">

        <div class="size-chart-wrapper">
            <div class="size-chart">
                <i class="fas fa-times size-times"></i>
                <div class="size-chart-container">
                    <p class="size-chart-title">size chart</p>
                    <div class="size-wrapper">
                        <!-- <div> -->
                        <table class="size-chart-table">
                            <tbody>
                                <tr>
                                    <th>US – Men's</th>
                                    <td class="odd">3.5</td>
                                    <td class="even">4</td>
                                    <td class="odd">4.5</td>
                                    <td class="even">5</td>
                                    <td class="odd">5.5</td>
                                    <td class="even">6</td>
                                    <td class="odd">6.5</td>
                                    <td class="even">7</td>
                                    <td class="odd">7.5</td>
                                    <td class="even">8</td>
                                    <td class="odd">8.5</td>
                                    <td class="even">9</td>
                                    <td class="odd">9.5</td>
                                    <td class="even">10</td>
                                    <td class="odd">10.5</td>
                                    <td class="even">11</td>
                                    <td class="odd">11.5</td>
                                    <td class="even">12</td>
                                    <td class="odd">12.5</td>
                                    <td class="even">13</td>
                                    <td class="odd">13.5</td>
                                    <td class="even">14</td>
                                    <td class="odd">14.5</td>
                                    <td class="even">15</td>
                                    <td class="odd">15.5</td>
                                    <td class="even">16</td>
                                    <td class="odd">16.5</td>
                                    <td class="even">17</td>
                                    <td class="odd">17.5</td>
                                    <td class="even">18</td>
                                    <td class="odd">18.5</td>
                                    <td class="even">19</td>
                                    <td class="odd">19.5</td>
                                    <td class="even">20</td>
                                    <td class="odd">20.5</td>
                                    <td class="even">21</td>
                                    <td class="odd">21.5</td>
                                    <td class="even">22</td>
                                </tr>

                                <tr>
                                    <th>US – Women's</th>
                                    <td class="odd">5</td>
                                    <td class="even">5.5</td>
                                    <td class="odd">6</td>
                                    <td class="even">6.5</td>
                                    <td class="odd">7</td>
                                    <td class="even">7.5</td>
                                    <td class="odd">8</td>
                                    <td class="even">8.5</td>
                                    <td class="odd">9</td>
                                    <td class="even">9.5</td>
                                    <td class="odd">10</td>
                                    <td class="even">10.5</td>
                                    <td class="odd">11</td>
                                    <td class="even">11.5</td>
                                    <td class="odd">12</td>
                                    <td class="even">12.5</td>
                                    <td class="odd">13</td>
                                    <td class="even">13.5</td>
                                    <td class="odd">14</td>
                                    <td class="even">14.5</td>
                                    <td class="odd">15</td>
                                    <td class="even">15.5</td>
                                    <td class="odd">16</td>
                                    <td class="even">16.5</td>
                                    <td class="odd">17</td>
                                    <td class="even">17.5</td>
                                    <td class="odd">18</td>
                                    <td class="even">18.5</td>
                                    <td class="odd">19</td>
                                    <td class="even">19.5</td>
                                    <td class="odd">20</td>
                                    <td class="even">20.5</td>
                                    <td class="odd">21</td>
                                    <td class="even">21.5</td>
                                    <td class="odd">22</td>
                                    <td class="even">22.5</td>
                                    <td class="odd">23</td>
                                    <td class="even">23.5</td>
                                </tr>
                                <tr>
                                    <th>UK</th>
                                    <td class="odd">3</td>
                                    <td class="even">3.5</td>
                                    <td class="odd">4</td>
                                    <td class="even">4.5</td>
                                    <td class="odd">5</td>
                                    <td class="even">5.5</td>
                                    <td class="odd">6</td>
                                    <td class="even">6</td>
                                    <td class="odd">6.5</td>
                                    <td class="even">7</td>
                                    <td class="odd">7.5</td>
                                    <td class="even">8</td>
                                    <td class="odd">8.5</td>
                                    <td class="even">9</td>
                                    <td class="odd">9.5</td>
                                    <td class="even">10</td>
                                    <td class="odd">10.5</td>
                                    <td class="even">11</td>
                                    <td class="odd">11.5</td>
                                    <td class="even">12</td>
                                    <td class="odd">12.5</td>
                                    <td class="even">13</td>
                                    <td class="odd">13.5</td>
                                    <td class="even">14</td>
                                    <td class="odd">14.5</td>
                                    <td class="even">15</td>
                                    <td class="odd">15.5</td>
                                    <td class="even">16</td>
                                    <td class="odd">16.5</td>
                                    <td class="even">17</td>
                                    <td class="odd">17.5</td>
                                    <td class="even">18</td>
                                    <td class="odd">18.5</td>
                                    <td class="even">19</td>
                                    <td class="odd">19.5</td>
                                    <td class="even">20</td>
                                    <td class="odd">20.5</td>
                                    <td class="even">21</td>
                                </tr>
                                <tr>
                                    <th>CM</th>
                                    <td class="odd">22.5</td>
                                    <td class="even">23</td>
                                    <td class="odd">23.5</td>
                                    <td class="even">23.5</td>
                                    <td class="odd">24</td>
                                    <td class="even">24.5</td>
                                    <td class="odd">25</td>
                                    <td class="even">25.5</td>
                                    <td class="odd">26</td>
                                    <td class="even">26.5</td>
                                    <td class="odd">27</td>
                                    <td class="even">27.5</td>
                                    <td class="odd">28</td>
                                    <td class="even">28.5</td>
                                    <td class="odd">29</td>
                                    <td class="even">29.5</td>
                                    <td class="odd">30</td>
                                    <td class="even">30.5</td>
                                    <td class="odd">31</td>
                                    <td class="even">31.5</td>
                                    <td class="odd">32</td>
                                    <td class="even">32.5</td>
                                    <td class="odd">33</td>
                                    <td class="even">33.5</td>
                                    <td class="odd">34</td>
                                    <td class="even">34.5</td>
                                    <td class="odd">35</td>
                                    <td class="even">35.5</td>
                                    <td class="odd">36</td>
                                    <td class="even">36.5</td>
                                    <td class="odd">37</td>
                                    <td class="even">37.5</td>
                                    <td class="odd">38</td>
                                    <td class="even">38.5</td>
                                    <td class="odd">39</td>
                                    <td class="even">39.5</td>
                                    <td class="odd">40</td>
                                    <td class="even">40.5</td>


                                </tr>
                                <tr>
                                    <th>EU</th>
                                    <td class="odd">35.5</td>
                                    <td class="even">36</td>
                                    <td class="odd">36.5</td>
                                    <td class="even">37</td>
                                    <td class="odd">37.5</td>
                                    <td class="even">38</td>
                                    <td class="odd">38.5</td>
                                    <td class="even">39</td>
                                    <td class="odd">40</td>
                                    <td class="even">40.5</td>
                                    <td class="odd">41</td>
                                    <td class="even">42</td>
                                    <td class="odd">42.5</td>
                                    <td class="even">43</td>
                                    <td class="odd">44</td>
                                    <td class="even">44.5</td>
                                    <td class="odd">45</td>
                                    <td class="even">45.5</td>
                                    <td class="odd">46</td>
                                    <td class="even">47</td>
                                    <td class="odd">47.5</td>
                                    <td class="even">48</td>
                                    <td class="odd">48.5</td>
                                    <td class="even">49</td>
                                    <td class="odd">49.5</td>
                                    <td class="even">50</td>
                                    <td class="odd">50.5</td>
                                    <td class="even">51</td>
                                    <td class="odd">51.5</td>
                                    <td class="even">52</td>
                                    <td class="odd">52.5</td>
                                    <td class="even">53</td>
                                    <td class="odd">53.5</td>
                                    <td class="even">54</td>
                                    <td class="odd">54.5</td>
                                    <td class="even">55</td>
                                    <td class="odd">55.5</td>
                                    <td class="even">56</td>

                                </tr>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-product-container">
            <?php
            $getDetail = $conn->query("SELECT TenHH, Gia,Title, About, EndCT, hanghoa.MSHH, url, TenHinh FROM hanghoa
                                INNER JOIN hinhhanghoa ON hinhhanghoa.MSHH = hanghoa.MSHH
                                INNER JOIN chitiet_specific ON chitiet_specific.MSHH = hanghoa.MSHH
                                WHERE hanghoa.MSHH = ${_GET['ms']} AND STT_HINH = 1;
                            ");
            $Detail = $getDetail->fetch_assoc();
            $price = $Detail['Gia'];
            $result1 = number_format($price, 0, ',', '.');
            ?>
            <div class="modal-product-wrapperer">
                <i class="fas fa-times modal-time-details"></i>
                <div class="modal-product-wrapper">
                    <div class="modal-product--detail">
                        <header>
                            <img width="10%" src="
                                            <?php echo "${Detail['url']}${Detail['TenHinh']}" ?>
                                        " alt="">
                            <div class="modal-product--title">
                                <p>
                                    <?php echo "${Detail['TenHH']}" ?>
                                </p>
                                <p>
                                    <?php echo "$result1" ?>
                                </p>
                            </div>
                        </header>
                        <div class="info">
                            <p class="info-heading">
                                <?php echo "${Detail['Title']}" ?>
                            </p>
                            <div class="info-section">
                                <p class="info-section--title"></p>
                                <div class="info-section--para">
                                    <?php echo "${Detail['About']}" ?>
                                </div>
                            </div>
                            <div class="info-section">
                                <div class="info-section--title">Benefits</div>
                                <div class="info-section--list">
                                    <ul>
                                        <?php
                                        $ben = $conn->query("SELECT Benefits FROM benefits WHERE ChiTiet_STT = ${_GET['ms']}");
                                        while ($benefit = $ben->fetch_assoc()) {
                                            echo "<li>${benefit['Benefits']}</li>";
                                        };
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-section">
                                <div class="info-section--title">Product Details</div>
                                <div class="info-section--list">
                                    <ul>
                                        <?php
                                        $ben1 = $conn->query("SELECT ProductDetails FROM productdetails WHERE ChiTiet_STT = ${_GET['ms']}");
                                        while ($benefit1 = $ben1->fetch_assoc()) {
                                            echo "<li>${benefit1['ProductDetails']}</li>";
                                        };
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-section">
                                <!-- <p class="info-section--title">Final</p> -->
                                <div class="info-section--para">
                                    <?php echo "${Detail['EndCT']}" ?>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal " attributes="false">
            <div class="modal-container">
                <i class="fas fa-times modal-time"></i>
                <div class="modal-signin">
                    <div class="modal-title">
                        <p>YOUR ACCOUNT FOR<br>EVERYTHING NIKE</p>
                        <p class="title-message"></p>
                    </div>
                    <div class="modal-form">
                        <form action="signin.php" id="signin-form" method="POST">
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
                        <form action="./signup.php" id="signup-form" method="post">
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
                                    <input class="date-of-birth" type="date" placeholder="Date of Birth" name="date">
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
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15715.067930463327!2d105.76574731183959!3d10.036077643338615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a062a1bb236883%3A0x6045b0eb4472c088!2zTklLRSBTZW5zZSBDaXR5IEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1637636203175!5m2!1svi!2s"
                        width="1200"
                        height="700"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"></iframe> 
                </div>
            </div>

        </div>
        <div class="header-fixed">

        <?php
        include "./header.php"
        ?>
        </div>
<div class="product-container">
            <div class="main-product">
                <div class="main-container">
                    <div class="product-img">
                        <?php
                        while ($img = $query->fetch_assoc()) {
                            echo "
                                    <div class='product-wrapper'>
                                        <a href='' class='img-detail'>
                                            <img src='${img['url']}${img['TenHinh']}' alt=''>
                                        </a>
                                    </div>
                                 ";
                        }
                        ?>
                    </div>
                    <div class="product-detail">
                        <div class="product-title">
                            <?php
                            echo "
                                <p class='title-name'>${result['TenHH']}</p>
                                <p class='title-type'>${result['TenLoaiHang']}</p>
                                <p class='title-price'>${result1}đ</p>
                            ";
                            ?>
                        </div>
                        <div class="product-color"></div>
                        <form class="product-form" name="product-form" action="./testing.php" method="POST">
                            <div class="product-size--chart">
                                <div class="size-title">
                                    <p>Select Size</p>
                                    <p class="show-size-chart">Size guide</p>
                                </div>
                                <div class="size-board">
                                    <div>
                                        <input type="radio" id="36" name="size" class="input-size" value="36">
                                        <label for="36" class="size-button">
                                            EU 36
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="37" name="size" class="input-size" value="37">
                                        <label for="37" class="size-button">
                                            EU 37
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="38" name="size" class="input-size" value="38">
                                        <label for="38" class="size-button">
                                            EU 38
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="39" name="size" class="input-size" value="39">
                                        <label for="39" class="size-button">
                                            EU 39
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="40" name="size" class="input-size" value="40">
                                        <label for="40" class="size-button">
                                            EU 40
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="41" name="size" class="input-size" value="41">
                                        <label for="41" class="size-button">
                                            EU 41
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="42" name="size" class="input-size" value="42">
                                        <label for="42" class="size-button">
                                            EU 42
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="43" name="size" class="input-size" value="43">
                                        <label for="43" class="size-button">
                                            EU 43
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="44" name="size" class="input-size" value="44">
                                        <label for="44" class="size-button">
                                            EU 44
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="submit submit-add">Add to bag</button>
                            <p class="noti-cart"></p>
                        </form>

                        <button class="submit submit-fav">Favorite</button>
                        <p class="noti-fav"></p>
                        <div class="product-about">
                            <div class="pre-about">
                                <p>
                                    <?php
                                    echo "${result['ChiTiet']}";
                                    ?>
                                    <span class="getName" style="visibility: hidden;"><?php echo "${result['MSHH']}"; ?></span>
                                </p>

                            </div>
                            <div class="about-modal-button">
                                <button class="submit submit-modal">
                                    <p>View Product Details</p>
                                    <div class="nike-logo--modal">
                                        <svg class="pre-logo-svg" height="60px" width="60px" fill="#111" viewBox="0 0 69 32">
                                            <path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z">
                                            </path>
                                        </svg>
                                    </div>

                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <script src="App.js"></script>
    <script src="validation.js"></script>
    <script>
        validation('signup-form')
    </script>
</body>

</html>