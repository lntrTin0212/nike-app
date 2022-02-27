<?php
session_start();
include 'connect.php';
$check = $conn->query("SELECT * from cart");
if ($check ->num_rows == 0 ){
    header("Location: index.php");
}

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
    <link rel='stylesheet' href="./assets/css/modal.css">
    <link rel='stylesheet' href="./assets/css/cart.css">
    <link rel='stylesheet' href="./assets/css/footer.css">

    <title>Cart</title>

</head>

<body>
    <div class="app">

        <div class="modal " attributes="false">
            <div class="modal-container">
                <i class="fas fa-times modal-time"></i>
                <div class="modal-signin">
                    <div class="modal-title">
                        <p>YOUR ACCOUNT FOR<br>EVERYTHING NIKE</p>
                    </div>
                    <div class="modal-form">
                        <form action="" id="signin-form">
                            <div class="modal-input">
                                <input type="email" placeholder="Email Address">
                                <input type="text" placeholder="PassWord">
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
                                <input type="submit" value="SIGN IN">
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
                    </div>
                    <div class="modal-form">
                        <form action="" id="signup-form">
                            <div class="modal-input">
                                <input type="email" placeholder="Email Address">
                                <input type="text" placeholder="PassWord">
                                <input type="text" placeholder="First Name">
                                <input type="text" placeholder="Last Name">
                                <input type="text" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')">
                                <div class="gender-container">
                                    <div class="gender-male">
                                        <input type="radio" name="gender" id="male" class="signup-gender">
                                        <i class="fas fa-check gender-icon"></i>
                                        <label for="male">Male</label>
                                    </div>
                                    <span class="margin-gender"></span>
                                    <div class="gender-female">
                                        <input type="radio" name="gender" id="female" class="signup-gender">
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
        <div class="modal-product-container ">
            <div class="modal-product-wrapperer">
                <i class="fas fa-times modal-time-details"></i>
                <div class="modal-product-wrapper">
                    <div class="modal-product--detail">
                        <header>
                            <img width="10%" src="https://static.nike.com/a/images/t_default/ca01f208-3ec0-4789-94d4-75bd2a93a36f/jordan-one-take-ii-pf-basketball-shoe-m666jq.png" alt="">
                            <div class="modal-product--title">
                                <p>Jordan One Take II PF</p>
                                <p>2,048,000₫</p>
                            </div>
                        </header>
                        <div class="info">
                            <p class="info-heading">DISRUPTIVE SPEED AT THE CRITICAL MOMENT.</p>
                            <div class="info-section">
                                <p class="info-section--title"></p>
                                <div class="info-section--para">Russell Westbrook backs up his brashness with a fast, aggressive playing style and numbers that place him among the league's best. His all-new Jordan One Take II embodies his edginess and speed.Colours, textures and design lines speak to Russ' persona both on and off the court.This PF version uses an extra-durable outsole that's ideal for outdoor courts.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Ground Control</p>
                                <div class="info-section--para">The rubber outsole is separated into 2 sections to help reduce the shoe's overall weight and enable smooth transitions.A multi-directional cross-hatch tread pattern provides traction to help you stop, cut and go at the game's pace.</div>
                            </div>
                            <div class="info-section">
                                <div class="info-section--title">Product Details</div>
                                <div class="info-section--list">
                                    <ul>
                                        <li>Lightweight, mixed-material upper</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-section">
                                <div class="info-section--title">Product Details</div>
                                <div class="info-section--list">
                                    <ul>
                                        <li>Lightweight, mixed-material upper</li>
                                        <li>Lightweight, mixed-material upper</li>
                                        <li>Lightweight, mixed-material upper</li>
                                        <li>Lightweight, mixed-material upper</li>
                                        <li>Lightweight, mixed-material upper</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                            <div class="info-section">
                                <p class="info-section--title">Top-Loaded Zoom</p>
                                <div class="info-section--para">The Zoom Air unit in the forefoot is top-loaded to help bring the responsive sensation closer to your foot.The section of the outsole directly under the Zoom switches to herringbone traction.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-fixed">
        <?php
        include "./header.php"
        ?>
        </div>
        <div class="cart-wrapper">
            <div class="cart-container">
                <form action="payout.php" method="POST" class="form-payout" id="checkout-form">
                    <div class="bag">
                        <p>Bag</p>
                        <?php
                        $get = $conn->query("SELECT id_member FROM member
                        WHERE email = '${_SESSION["username"]}' ");
                        $getID = $get->fetch_assoc();
                        $query = $conn->query("SELECT cart.MSHH, TenHH, Gia, TenLoaiHang, sizes_id, url, TenHinh from cart
                                INNER JOIN hinhhanghoa ON cart.MSHH = hinhhanghoa.MSHH
                                WHERE id_member = '${getID['id_member']}' AND STT_Hinh = 1;
                            ");
                        $sum_price = 0;
                        while ($result = $query->fetch_assoc()) {
                            $sum_price += $result['Gia'];
                            echo "
                                <div class='product-wrapper'>
                                <!-- <div class='product-img-cart'> -->
                                    <img width='20%' src='${result['url']}${result['TenHinh']}' alt=''>
                                <!-- </div> -->
                                <div class='product-info'>
                                    <div class='product-name'>
                                        <a class='menu-link' href=''>${result["TenHH"]}</span></a>
                                        <p class='product-price'>".ToPrice($result['Gia'])."đ</p>
                                    </div>
                                    <div class='product-select'>
                                        <div class='product-size'>
                                            <p>Size</p>
                                            
                                            <select class='selectSize' name='' id='' value='44' style='text-align:center'>
                                                <option value='${result['sizes_id']}' selected>${result['sizes_id']}</option>
                                                <option value=''>re-select:</option>
                                                <option value='36'>36</option>
                                                <option value='37'>37</option>
                                                <option value='38'>38</option>
                                                <option value='39'>39</option>
                                                <option value='40'>40</option>
                                                <option value='41'>41</option>
                                                <option value='42'>42</option>
                                                <option value='43'>43</option>
                                                <option value='44'>44</option>
                                            </select>

                                        </div>
                                        <div class='product-quantity'>
                                            <p>Quantity</p>
                                            <select id='' name='capacity[]'>
                                                <option value='1' selected>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='product-button'>
                                        
                                        <div class='remove'>
                                            <a class='cart-link' href='./delete-product.php?del=".$result['MSHH']."&size=".$result['sizes_id']."'>
                                                Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ";
                        }
                        ?>
                    </div>
                    <div class="summary">
                        <p>summary</p>
                        <div class="info-container">
                            <p class="title-message">Vui lòng nhập đúng định dạng</p>
                            <p>Customer <?php echo "${_SESSION['username']}";?></p>
                            <input type="text" id='info-customer' name='info-customer' placeholder="Customer's name(*)" require>
                            <div class="message"></div>
                            <input type="text" id='info-company' name='info-company' placeholder="Company's name">
                            <div class="message"></div>
                            <input type="text" id='info-address' name='info-address' placeholder="Address(*)">
                            <div class="message"></div>
                            <input type='text' id='info-phoneNum' name='info-phoneNum' placeholder="Phone number(*)">
                            <div class="message"></div>
                            <input type='text' id='info-faxNum' name='info-faxNum' placeholder="fax number(*)">
                            <div class="message"></div>
                            
                        </div>
                        <div class="total">
                            <div class="total-price">
                                <p>Subtotal: </p>
                                <span class="sum-price">
                                    <?php
                                        echo "".ToPrice($sum_price)."đ";
                                    ?>
                                </span>
                            </div>
                            <div class="total-price">
                                <p>Estimated Delivery & Handling</p>
                                <p class="deli-price">30,000₫</p>
                            </div>
                            <div class="total-price">
                                <p>Discount: </p>
                                <p class="deli-price">
                                    <?php
                                    $discount;
                                        if ($query->num_rows < 5 && $query->num_rows >= 2) {
                                            $discount = 5;
                                            echo "5%";
                                        }
                                        else if ($query->num_rows >= 5) {
                                            $discount = 10;
                                            echo "10%";
                                        }
                                        else {
                                            $discount = 0;  
                                            echo "0";
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="final-total">
                        
                            <p>Total</p>
                            <p class="final">
                                <?php
                                    $final_price = $sum_price - (($sum_price + 30000) / 100 * $discount);
                                    echo "".ToPrice($final_price)."đ";
                                ?>
                            </p>
                           
                        </div>
                        <div class="final-total final_desc">
                            <p>2 đôi trở lên sẽ được giảm 5% </br> tổng hóa đơn</p>   
                            <p>Trên 5 đôi sẽ được giảm 10% </br>tổng hóa đơn</p>
                        </div>
                        <input type="text" name="discount" class="discount" value="<?php echo "$discount" ?>">
                        <input type="text" name="final_price" class="discount" value="<?php echo "$final_price" ?>">
                        <div class="checkout-btn">
                            <button type="submit" class="submit-checkout">Checkout</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    </div>
    <script src="App.js"></script>
    <script src="cart.js"></script>
    <!-- <script src="validation.js"></script> -->
</body>

</html>