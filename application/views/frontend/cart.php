<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart Page - Ustora Demo</title>

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
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><?php if ($this->session->userdata('logincomplete') != 1) { ?>เข้าสู่ระบบ / สมัครสมาชิก<?php } else { ?><?php echo "สวัสดีคุณ ". $this->session->userdata('user_name')." ".$this->session->userdata('user_lastname'); ?> <?php } ?></span><!--<span class="value">USD </span>--><b class="caret"></b></a>
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
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index">ตะกร้าสินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index">แจ้งการชำระเงิน</a></li>
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
                            <h2>Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Page title area -->


        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-4">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Search Products</h2>
                            <form action="#">
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
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>                             
                            </div>
                            <div class="thubmnail-recent">
                                <img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-sidebar-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>                             
                            </div>
                        </div>
                        
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Recent Posts</h2>
                            <ul>
                                <li><a href="#">Sony Smart TV - 2015</a></li>
                                <li><a href="#">Sony Smart TV - 2015</a></li>
                                <li><a href="#">Sony Smart TV - 2015</a></li>
                                <li><a href="#">Sony Smart TV - 2015</a></li>
                                <li><a href="#">Sony Smart TV - 2015</a></li>
                            </ul>
                        </div>
                    </div>-->

                    <div class="col-md-12">
                        <h2 class="sidebar-title">ตะกร้าสินค้า</h2>
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <form method="post"  action="">
                                    <table cellspacing="0" class="shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">ลบสินค้า</th>
                                                <!--<th class="product-thumbnail">ภาพตัวอย่าง</th>-->
                                                <th class="product-name">สินค้า</th>
                                                <th class="product-price">ราคา</th>
                                                <th class="product-quantity">จำนวน</th>
                                                <th class="product-subtotal">รวมทั้งสิ้น</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($this->cart->contents() as $items) {
                                                ?>
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a title="Remove this item" class="remove" href="<?php echo base_url(); ?>index.php/frontend/cartController/delete_cart/<?php echo $items['rowid'] ?>">×</a> 
                                                    </td>

                                                        <!--<td class="product-thumbnail">
                                                            <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url(); ?>img/product-thumb-2.jpg"></a>
                                                        </td>-->

                                                    <td class="product-name">
                                                        <a href="single-product.html"><?php echo $items['name']; ?></a> 
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="amount"><?php echo $this->cart->format_number($items['price']); ?>&nbsp;บาท</span> 
                                                    </td>

                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <!--<input type="button" class="minus" value="-">-->
                                                            <a class="plus" href="<?php echo base_url(); ?>index.php/frontend/cartController/reduce_cart/<?php echo $items['rowid'] ?>/<?php echo $items['qty']; ?>">-</a>
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $items['qty']; ?>" min="0" step="1">
                                                            <!--<input type="button" class="plus" value="+">-->
                                                            <a class="plus" href="<?php echo base_url(); ?>index.php/frontend/cartController/add_cart/<?php echo $items['rowid'] ?>/<?php echo $items['qty']; ?>">+</a>
                                                        </div>
                                                    </td>

                                                    <td >
                                                        <span class="amount"><?php echo $this->cart->format_number($items['subtotal']); ?>&nbsp;บาท</span> 
                                                    </td>
                                                </tr>

    <!--<tr class="cart_item">
        <td class="product-remove">
            <a title="Remove this item" class="remove" href="#">×</a> 
        </td>

        <td class="product-thumbnail">
            <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url(); ?>img/product-thumb-2.jpg"></a>
        </td>

        <td class="product-name">
            <a href="single-product.html">Ship Your Idea</a> 
        </td>

        <td class="product-price">
            <span class="amount">£15.00</span> 
        </td>

        <td class="product-quantity">
            <div class="quantity buttons_added">
                <input type="button" class="minus" value="-">
                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                <input type="button" class="plus" value="+">
            </div>
        </td>

        <td class="product-subtotal">
            <span class="amount">£15.00</span> 
        </td>
    </tr>-->



<?php } ?>
                                        </tbody>
                                    </table>
                                </form>

                                <div class="cart-collaterals">


                                    <!-- <div class="cross-sells">
                                         <h2>You may be interested in...</h2>
                                         <ul class="products">
                                             <li class="product">
                                                 <a href="single-product.html">
                                                     <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="<?php echo base_url(); ?>img/product-2.jpg">
                                                     <h3>Ship Your Idea</h3>
                                                     <span class="price"><span class="amount">£20.00</span></span>
                                                 </a>
         
                                                 <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                             </li>
         
                                             <li class="product">
                                                 <a href="single-product.html">
                                                     <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="<?php echo base_url(); ?>img/product-4.jpg">
                                                     <h3>Ship Your Idea</h3>
                                                     <span class="price"><span class="amount">£20.00</span></span>
                                                 </a>
         
                                                 <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                             </li>
                                         </ul>
                                     </div>-->


                                    <div class="cart_totals ">
                                        <h2>Cart Totals</h2>

                                        <table cellspacing="0">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>รวมเป็นเงินทั้งสิ้น</th>
                                                    <td><span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;บาท</span></td>
                                                </tr>
                                                <?php
                                                $countOrder = 0;
                                                foreach ($this->cart->contents() as $items) {
                                                    $countOrder+=$items['qty'];
                                                }
                                                ?>
                                                <tr class="shipping">
                                                    <th>การจัดส่ง</th>
                                                    <?php if ($countOrder > 5) { ?>
                                                        <td>บริการจัดส่งฟรี</td>
                                                    <?php } else { ?>
                                                        <td>คิดค่าบริการ 50 บาท(ems)</td>
<?php } ?>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>รวมจำนวนสั่งทั้งสิ้น</th>
                                                    <td><strong><span class="amount"></span><?php echo $countOrder; ?>&nbsp;ชิ้น</span></strong></td>
                                                </tr>
                                                <tr class="order-total text-right">
                                                <form method="post" id="sendOrder" action="<?php echo base_url(); ?>index.php/frontend/orderController/confirm_order">


                                                </form>
                                            <td colspan="2" align="right">
                                                    
                                                        <!--<a class="btn btn-primary btn-lg" >ส่งคำสั่งซื้อสินค้า</a>-->
                                                        <?php if($countOrder > 0){?>
                                                            <a id="btnSendOrder" class="button-m">ส่งคำสั่งซื้อ</a>
                                                        <?php }else{?>
                                                            <a  class="button-m">ส่งคำสั่งซื้อ</a>
                                                        <?php }?>
                                                            
                                                       
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <!--<form method="post" action="#" class="shipping_calculator">
                                        <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>
        
                                        <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">
        
                                        <p class="form-row form-row-wide">
                                        <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
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
        
                                        <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>
        
                                        <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>
        
        
                                        <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>
        
                                        </section>
                                    </form>-->


                                </div>
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
                                <form action="#">
                                    <input type="email" placeholder="Type your email">
                                    <input type="submit" value="ติดตาม">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer top area -->

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
        </div> <!-- End footer bottom area -->

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
            $("#btnSendOrder").click(function () {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>index.php/frontend/cartController/check_login",
                    data: {}
                })
                        .done(function (data) {
                            if (data == 0) {
                                $('#value_message').html('คุณยังไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อนค่ะ');
                                $('#myModal').modal('show');
                            } else {
                                $("#sendOrder").submit();
                            }
                        });
            });


        });


    </script>
</html>