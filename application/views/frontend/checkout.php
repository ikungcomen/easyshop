<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout Page - Ustora Demo</title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/mybutton.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/AccountController/index"><i class="fa fa-user"></i> บัญชีของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index"><i class="fa fa-user"></i> ตะกร้าสินค้าของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index"><i class="fa fa-user"></i> แจ้งการชำระเงิน</a></li>
                            </ul>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><?php if ($this->session->userdata('logincomplete') != 1) { ?>เข้าสู่ระบบ / สมัครสมาชิก<?php } else { ?><?php echo "สวัสดีคุณ " . $this->session->userdata('user_name') . " " . $this->session->userdata('user_lastname'); ?> <?php } ?></span><!--<span class="value">USD </span>--><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <?php if ($this->session->userdata('logincomplete') != 1) { ?>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/loginController/index">เข้าสู่ระบบ</a></li>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/registerController/index">สมัครสมาชิก</a></li>
                                        <?php } ?>


                                        <?php if ($this->session->userdata('logincomplete') == 1) { ?>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/orderController/index">ประวัติการสั่งซื้อ</a></li>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/AccountController/addreddShip">ที่อยู่สำหรับจัดส่ง</a></li>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/loginController/logout"><font color="red">ออกจากระบบ</font></a></li>

                                        <?php } ?>
                                    </ul>
                                </li>

                                <!--<li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End header area -->

        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="./"><img src="<?php echo base_url(); ?>img/logo.png"></a></h1>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <?php
                        $countProduct = 0;
                        foreach ($this->cart->contents() as $items) {
                            $countProduct+=$items['qty'];
                        }
                        ?>
                        <div class="shopping-item">
                            <a href="cart.html">Cart - <span class="cart-amunt">$<?php echo $this->cart->format_number($this->cart->total()); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $countProduct; ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End site branding area -->

        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/indexController/index">หน้าแรก</a></li>
                            <li ><a href="<?php echo base_url(); ?>index.php/frontend/shopController/index">เลือกซื้อสินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/productController/index">สินค้า</a></li>
                            <li ><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index">ตะกร้าสินค้า</a></li>
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index">แจ้งการชำระเงิน</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/PaymentController/index">วิธีการชำระเงิน</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/contactController/index">ติดต่อเรา</a></li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div> <!-- End mainmenu area -->

        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Inform Payment</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-4">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Search Products</h2>
                            <form action="">
                                <input type="text" placeholder="Search products...">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                        
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Products</h2>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$100.00</del>
                                </div>                             
                            </div>
                        </div>
                        
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Recent Posts</h2>
                            <ul>
                                <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                                <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                                <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                                <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                                <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                            </ul>
                        </div>
                    </div>-->

                    <div class="col-md-12">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <?php if ($this->session->userdata("logincomplete") != 1) { ?>
                                    <div class="woocommerce-info">คุณยังไม่ได้ Login เข้าสู่ระบบค่ะ ? <a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap">เข้าสู่ระบบ</a>
                                    </div>
                                <?php } ?>

                                <form id="login-form-wrap" class="login collapse" method="post" action="<?php echo base_url(); ?>index.php/frontend/checkoutController/checkLogin">


                                    <span class="required"><p>*** หมายเหตุ หากคุณต้องการซื้อสินค้าจากทางเรา คุณต้องทำการ Login เข้าสู่ระบบก่อนค่ะ จึงจะสามารถทำรายการได้</p>
                                        <p>และหากคุณยังไม่ได้เป็นสมาชิกกับทางเรา กรุณาสมัครสมาชิกกับทางเราก่อน เพื่อสิทธิประโยชน์ต่างๆ แล้วค่อยเข้าสู่ระบบใหม่อีกครั้งค่ะ</p></span>
                                    <p class="form-row form-row-first">
                                        <label for="username">ชื่อผู้ใช้ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                        </label>
                                        <input type="text" id="user_username" name="user_username" class="input-text">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="password">รหัสผ่าน <abbr title="required" class="required"><span class="required">*</span></abbr>
                                        </label>
                                        <input type="password" id="user_password" name="user_password" class="input-text">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row">

                                        <a id="btnLogin" class="button-s">เข้าสู่ระบบ</a>
                                       <!-- <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me </label>-->
                                    </p>
                                    <p class="lost_password">
                                        <a href="<?php echo base_url(); ?>index.php/frontend/registerController/index">ลืมรหัสผ่าน ?</a>
                                    </p>

                                    <div class="clear"></div>
                                </form>

                                <!--<div class="woocommerce-info">Have a coupon? <a class="showcoupon" data-toggle="collapse" href="#coupon-collapse-wrap" aria-expanded="false" aria-controls="coupon-collapse-wrap">Click here to enter your code</a>
                                </div>
    
                                <form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">
    
                                    <p class="form-row form-row-first">
                                        <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                    </p>
    
                                    <p class="form-row form-row-last">
                                        <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                    </p>
    
                                    <div class="clear"></div>
                                </form>-->
                                <?php if ($this->session->userdata("logincomplete") == 1) { ?>
                                    <form  id="comfirm_payment" action="<?php echo base_url(); ?>index.php/frontend/checkoutController/comfirm_payment"  method="post" >

                                        <div id="customer_details" class="col1-set">
                                            <!--<div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Billing Details</h3>
                                                    <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                        <label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                            <option value="">Select a country…</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="PW">Belau</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo (Brazzaville)</option>
                                                            <option value="CD">Congo (Kinshasa)</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">CuraÇao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="CI">Ivory Coast</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao S.A.R., China</option>
                                                            <option value="MK">Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territory</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="IE">Republic of Ireland</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="ST">São Tomé and Príncipe</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="SX">Saint Martin (Dutch part)</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option selected="selected" value="GB">United Kingdom (UK)</option>
                                                            <option value="US">United States (US)</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="WS">Western Samoa</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </p>
        
                                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                        <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                        <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
        
                                                    <p id="billing_company_field" class="form-row form-row-wide">
                                                        <label class="" for="billing_company">Company Name</label>
                                                        <input type="text" value="" placeholder="" id="billing_company" name="billing_company" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                        <label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                        <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                        <label class="" for="billing_city">Town / City <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Town / City" id="billing_city" name="billing_city" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                        <label class="" for="billing_state">County</label>
                                                        <input type="text" id="billing_state" name="billing_state" placeholder="State / County" value="" class="input-text ">
                                                    </p>
                                                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                        <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="billing_postcode" class="input-text ">
                                                    </p>
        
                                                    <div class="clear"></div>
        
                                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                        <label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                                    </p>
        
                                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                        <label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
        
        
                                                    <div class="create-account">
                                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                        <p id="account_password_field" class="form-row validate-required">
                                                            <label class="" for="account_password">Account password <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text">
                                                        </p>
                                                        <div class="clear"></div>
                                                    </div>
        
                                                </div>
                                            </div>-->

                                            <!--<div class="col-2">-->
                                            <!--<div class="woocommerce-shipping-fields">-->
                                            <h3 id="ship-to-different-address">
                                                <h2 class="sidebar-title">Inform Payment | แจ้งการชำระเงิน</h2>
                                                <!--<label class="checkbox" for="ship-to-different-address-checkbox">ที่อยู่สำหรับจัดส่งสินค้า</label>-->
                                                <!--<input type="checkbox" value="1" name="ship_to_different_address" checked="checked" class="input-checkbox" id="ship-to-different-address-checkbox">-->
                                            </h3>
                                            <div class="shipping_address" style="display: block;">
                                                <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                    <label class="" for="shipping_country">หมายเลขการสั่งซื้อ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                    </label>
                                                    <select class="country_to_state country_select" id="order_number" name="order_number">
                                                        <option value="">Select order number...</option>
                                                        <?php foreach ($order as $row) { ?>
                                                            <option value="<?php echo $row['order_key']; ?>"><?php echo $row['order_key']; ?></option>
                                                        <?php } ?>

                                                    </select>
                                                </p>
                                                <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                    <label class="" for="shipping_country">โอนเข้าบัญชี <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                    </label>
                                                    <select class="country_to_state country_select" id="bank_number" name="bank_number">
                                                        <option value="">Select a bank...</option>
                                                        <?php foreach ($bank as $row) { ?>
                                                            <option value="<?php echo $row['bank_key']; ?>"><?php echo $row['bank_number'] . " " . $row['bank_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </p>
                                                
                                                <p id="shipping_first_name_field" class="form-row form-row-first validate-required">
                                                    <label class="" for="shipping_first_name">จำนวนเงิน <abbr title="required" class="required"><span class="required">*</span></abbr>&nbsp;&nbsp;&nbsp;<span class="required">จำนวนเงินที่ต้องโอนทั้งสิ้น &nbsp;<span id="total_price">-</span>&nbsp;บาท</span>
                                                    </label>
                                                    <input type="text" value="" placeholder="" id="price" name="price" class="input-text ">
                                                </p>

                                                <p id="shipping_last_name_field" class="form-row form-row-last validate-required">
                                                    <label class="" for="shipping_last_name">วันที่ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                    </label>
                                                    <select class="country_to_state country_select" id="payment_date" name="payment_date">
                                                        <option value="">Select a country…</option>
                                                        <option value="AX">ธนาคารกสิกร สาขาซีคอนสแควศรีนครินทร์</option>
                                                        <option value="AF">ธนาคารไทยพาณิชย์ สาขาสีลม</option>
                                                    </select>
                                                </p>
                                                <div class="clear"></div>

                                                <!--<p id="shipping_company_field" class="form-row form-row-wide">
                                                    <label class="" for="shipping_company">บริษัท</label>
                                                    <input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                                </p>

                                                        <p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                            <label class="" for="shipping_address_1">ที่อยู่ <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="Street address" id="shipping_address_1" name="shipping_address_1" class="input-text ">
                                                        </p>

                                                        <p id="shipping_address_2_field" class="form-row form-row-wide address-field">
                                                            <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text ">
                                                        </p>

                                                        <p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                            <label class="" for="shipping_city">Town / City <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="Town / City" id="shipping_city" name="shipping_city" class="input-text ">
                                                        </p>

                                                        <p id="shipping_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                            <label class="" for="shipping_state">County</label>
                                                            <input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="input-text ">
                                                        </p>
                                                        <p id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                            <label class="" for="shipping_postcode">รหัสไปรษณีย์ <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="Postcode / Zip" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                                        </p>-->
                                                <p id="order_comments_field" class="form-row notes">
                                                    <label class="" for="order_comments">รายละเอียดเพิ่มเติม</label>
                                                    <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="payment_descr" class="input-text " name="payment_descr"></textarea>
                                                </p>
                                                <div class="clear"></div>


                                            </div>
                                            <!-- </div>-->

                                            <!--</div>-->

                                        </div>

                                        <!-- <h3 id="order_review_heading">Your order</h3>
         
                                         <div id="order_review" style="position: relative;">
                                             <table class="shop_table">
                                                 <thead>
                                                     <tr>
                                                         <th class="product-name">Product</th>
                                                         <th class="product-total">Total</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <tr class="cart_item">
                                                         <td class="product-name">
                                                             Ship Your Idea <strong class="product-quantity">× 1</strong> </td>
                                                         <td class="product-total">
                                                             <span class="amount">£15.00</span> </td>
                                                     </tr>
                                                 </tbody>
                                                 <tfoot>
         
                                                     <tr class="cart-subtotal">
                                                         <th>Cart Subtotal</th>
                                                         <td><span class="amount">£15.00</span>
                                                         </td>
                                                     </tr>
         
                                                     <tr class="shipping">
                                                         <th>Shipping and Handling</th>
                                                         <td>
         
                                                             Free Shipping
                                                             <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                         </td>
                                                     </tr>
         
         
                                                     <tr class="order-total">
                                                         <th>Order Total</th>
                                                         <td><strong><span class="amount">£15.00</span></strong> </td>
                                                     </tr>
         
                                                 </tfoot>
                                             </table>
                                             
         
         
                                             <div id="payment">
                                                 <ul class="payment_methods methods">
                                                     <li class="payment_method_bacs">
                                                         <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                         <label for="payment_method_bacs">Direct Bank Transfer </label>
                                                         <div class="payment_box payment_method_bacs">
                                                             <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                         </div>
                                                     </li>
                                                     <li class="payment_method_cheque">
                                                         <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                         <label for="payment_method_cheque">Cheque Payment </label>
                                                         <div style="display:none;" class="payment_box payment_method_cheque">
                                                             <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                         </div>
                                                     </li>
                                                     <li class="payment_method_paypal">
                                                         <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                         <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                         </label>
                                                         <div style="display:none;" class="payment_box payment_method_paypal">
                                                             <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                         </div>
                                                     </li>
                                                 </ul>
         
                                                 <div class="form-row place-order">
         
                                                     <input type="submit" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
         
         
                                                 </div>
         
                                                 <div class="clear"></div>
         
                                             </div>
                                         </div>-->
                                        <div class="form-row place-order">
                                            <a id="save" class="button-s">บันทึกข้อมูล</a>
                                        </div>
                                    </form>
                                <?php } ?>



                            </div>                       
                        </div>                    
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h2>easy<span>Shop</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">แผนกบริการลูกค้า</h2>
                            <ul>
                                <li><a href="#">ตรวจสอบสถานะการสั่งซื้อ</a></li>
                                <li><a href="#">ตรวจสอบสถานะการส่งสินค้า</a></li>
                                <li><a href="#">คำถามที่พบบ่อย</a></li>
                                <li><a href="#">ติดต่อเรา</a></li>

                            </ul>                        
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">หมวดหมู่สินค้า</h2>
                            <ul>
                                <li><a href="#">เสื้อยืด</a></li>
                                <li><a href="#">เสื้อแฟชั่นชาย</a></li>
                                <li><a href="#">เสื้อแฟชั่นหญิง</a></li>
                                <li><a href="#">เสื้อเด็ก</a></li>
                                <li><a href="#">อื่นๆ</a></li>
                            </ul>                     
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h2 class="footer-wid-title">รับข้อมูลสินค้าใหม่</h2>
                            <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                            <div class="newsletter-form">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="ติดตาม">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <p>&copy; 2015 ECommerce. Design by IkungCpe. <!--<a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a>--></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-card-icon">
                            <i class="fa fa-cc-discover"></i>
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-paypal"></i>
                            <i class="fa fa-cc-visa"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest jQuery form server -->
        <script src="https://code.jquery.com/jquery.min.js"></script>

        <!-- Bootstrap JS form CDN -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- jQuery sticky menu -->
        <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.sticky.js"></script>

        <!-- jQuery easing -->
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.min.js"></script>

        <!-- Main Script -->
        <script src="<?php echo base_url(); ?>js/main.js"></script>
    </body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><font color="red">เกิดข้อผิดพลาด!!</font></h4>
                </div>
                <div class="modal-body">
                    <p id="value_message"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Confirm Modal-->
    <div class="modal fade" id="myModal_confirm" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><font color="blue">บันทึกข้อมูล</font></h4>
                </div>
                <div class="modal-body">
                    <p id="message_confirm"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="confirm" data-dismiss="modal" class="btn btn-primary" id="delete">ตกลง</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btnLogin").click(function () {
                var user_username = $('#user_username').val();
                var user_password = $('#user_password').val();
                if (user_username == "") {
                    $('#value_message').html('กรุณาระบุ ชื่อผู้ใช้');
                    $('#myModal').modal('show');
                } else if (user_password == "") {
                    $('#value_message').html('กรุณาระบุ รหัสผ่าน');
                    $('#myModal').modal('show');
                } else {
                    $("#login-form-wrap").submit();
                }
            });
            $("#save").click(function () {
                var order_number = $('#order_number').val();
                var bank_number = $('#bank_number').val();
                var price = $('#price').val();

                if (order_number == "") {
                    $('#value_message').html('กรุณาระบุ หมายเลขการสั่งซื้อ');
                    $('#myModal').modal('show');
                } else if (bank_number == "") {
                    $('#value_message').html('กรุณาระบุ โอนเข้าบัญชี');
                    $('#myModal').modal('show');
                } else if (price == "") {
                    $('#value_message').html('กรุณาระบุ จำนวนเงิน');
                    $('#myModal').modal('show');
                } else {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/frontend/checkoutController/get_total_price",
                        data: {order_nuber:order_number}
                    })
                    .done(function (data) {
                        $('#total_price').html(data)
                        if(price < data){
                            $('#value_message').html('กรุณาระบุ จำนวนเงินตามที่ท่านทำการโอนจริง หรือจำนวนเงินที่ต้องโอนทั้งสิ้น  หากท่านไม่ได้ทำการโอนเงินตามจำนวนเงินที่ต้องโอนทั้งสิ้นตามหมายเลขที่สั่งซื้อสินค้า  หากตรวจสอบแล้วพบว่าท่านไม่ได้ได้โอนครบตามจำนวน ทางเราขอสงวนสิทธิ์ในการจัดส่งสินค้าให้ท่าน หากท่านชำระเงินครบตามจำนวนแล้ว ทางเราจะรีบตรวจสอบและดำเนินการจัดส่งสินค้าให้ท่านโดยเร็ว ขอบคุณค่ะ');
                            $('#myModal').modal('show');
                        }else if(price > data){
                            $('#value_message').html('ท่านระบุ จำนวนเงิน มากกว่าจำนวนเงินที่ต้องโอนทั้งสิ้น กรุณาระบุใหม่อีกครั้งค่ะ');
                            $('#myModal').modal('show');
                        }else{
                            $("#comfirm_payment").submit();
                        }
                    });
                    
                    
                }
            });
            $("#order_number").change(function () {
                var order_nuber = $('#order_number').val()
                if(order_nuber != ""){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/frontend/checkoutController/get_total_price",
                        data: {order_nuber:order_nuber}
                    })
                        .done(function (data) {
                            $('#total_price').html(data)
                        });
                }else{
                    $('#total_price').html("-")
                }
                
            });


        });


    </script>
</html>