

        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="user-menu">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/AccountController/index"><i class="fa fa-user"></i> บัญชีของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index"><i class="fa fa-user"></i> ตะกร้าสินค้าของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index"><i class="fa fa-user"></i> แจ้งการชำระเงิน</a></li>
                                <!--<li><a href="#"><i class="fa fa-user"></i> เข้าสู่ระบบ</a></li>-->
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-6">
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
                                            <?php if ($this->session->userdata('user_role') == "admin") { ?>
                                                <li class="text-left"><a href="<?php echo base_url(); ?>index.php/">ตรวจสอบการแจ้งโอนเงิน</a></li>
                                                <li class="text-left"><a href="<?php echo base_url(); ?>index.php/">พิมพ์ที่อยู่จัดส่งสินค้า</a></li>
                                                <li class="text-left"><a href="<?php echo base_url(); ?>index.php/">อนุมัติจัดส่งสินค้า</a></li>
                                                <li class="text-left"><a href="<?php echo base_url(); ?>index.php/">ตรวจนับสต๊อคสินค้า</a></li>
                                            <?php }?>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/loginController/logout"><font color="red">ออกจากระบบ</font></a></li>
                                            
                                        <?php } ?>
                                    </ul>
                                </li>

                                <!--
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">ภาษา :</span><span class="value">English </span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">ไทย</a></li>
                                        <li><a href="#">อังกฤษ</a></li>
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
                            <h1><a href="./"><img src="<?php echo base_url(); ?>img/logo-mster.png"></a></h1>
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
                            <a href="<?php echo base_url(); ?>index.php/frontend/cartController/index">Cart - <span class="cart-amunt">$<?php echo $this->cart->format_number($this->cart->total()); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $countProduct; ?></span></a>
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
                            <li class="active"><a href="<?php echo base_url(); ?>index.php/indexController/index">หน้าแรก</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/shopController/index">เลือกซื้อสินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/productController/index">สินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index">ตะกร้าสินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index">แจ้งการชำระเงิน</a></li>
                            <li><a href="<?php echo base_url();?>index.php/frontend/PaymentController/index">วิธีการชำระเงิน</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/contactController/index">ติดต่อเรา</a></li>
                        </ul>
                    </div>  

                </div>
            </div>
        </div> <!-- End mainmenu area -->

        <div class="slider-area">
            <!-- Slider -->
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <?php foreach ($slide as $row){ ?>
                    <li>
                        <img src="<?php echo base_url(); ?>img/slide/<?php echo $row['slide_picture']; ?>" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                 <span class="primary"><?php echo $row['slide_name']; ?> <!--<strong>Plus</strong>--></span>
                            </h2>
                            <h4 class="caption subtitle"><?php echo $row['slide_dersc']; ?></h4>
                            <a class="caption button-radius" href=""><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <?php }?>
                    <!--
                    <li><img src="<?php echo base_url(); ?>img/slide/h4-slide2.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                by one, get one <span class="primary">50% <strong>off</strong></span>
                            </h2>
                            <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img src="<?php echo base_url(); ?>img/slide/h4-slide3.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Apple <span class="primary">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Select Item</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img src="<?php echo base_url(); ?>img/slide/h4-slide4.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Apple <span class="primary">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class="caption subtitle">& Phone</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>-->
                </ul>
            </div>
            <!-- ./Slider -->
        </div> <!-- End slider area -->

        <div class="promo-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo1">
                            <i class="fa fa-refresh"></i>
                            <p>30 Days return</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo2">
                            <i class="fa fa-truck"></i>
                            <p>Free shipping</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo3">
                            <i class="fa fa-lock"></i>
                            <p>Secure payments</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-promo promo4">
                            <i class="fa fa-gift"></i>
                            <p>New products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End promo area -->

        <div class="maincontent-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-product">
                            <h2 class="section-title">Latest Products</h2>
                            <div class="product-carousel">

                                <?php  foreach ($product as $row) {?>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="<?php echo base_url(); ?>img/product/<?php echo $row['product_picture']; ?>" alt="">
                                            <div class="product-hover">
                                                <a href="<?php echo base_url(); ?>index.php/frontend/cartController/add_cart_byProduct/<?php echo $row['product_code']; ?>/<?php echo $row['product_price_th']; ?>/<?php echo $row['product_name']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>เพิ่มเข้าตะกร้า</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i>ดูรายละเอียดสินค้า</a>
                                            </div>
                                        </div>
                                        <h2><a href="single-product.html"><?php echo $row['product_name']; ?></a></h2>
                                        <div class="product-carousel-price">
                                            <ins><?php echo $row['product_price_th']; ?> บาท</ins> <del><?php echo $row['product_price_us']; ?> บาท</del>

                                        </div> 
                                    </div>
                                <?php } ?>
                                <!--
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url(); ?>img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2>Nokia Lumia 1320</h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url(); ?>img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2>LG Leon 2015</h2>
    
                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url(); ?>img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2><a href="single-product.html">Sony microsoft</a></h2>
    
                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url(); ?>img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2>iPhone 6</h2>
    
                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="<?php echo base_url(); ?>img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
    
                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>                            
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End main content area -->

        <div class="brands-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-wrapper">
                            <div class="brand-list">
                                <?php  foreach ($blandner as $row) {?>
                                <img src="<?php echo base_url(); ?>img/brand/<?php echo $row['blandner_name'];?>" alt="">
                                <?php }?>
                               <!-- <img  alt="smile" id="imgSmile" src="<?php echo base_url(); ?>img/brand/brand1.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand2.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand3.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand4.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand5.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand6.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand1.png" alt="">
                                <img src="<?php echo base_url(); ?>img/brand/brand2.png" alt="">   -->                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End brands area -->

        <div class="product-widget-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">สินค้าขายดี</h2>
                            <a href="" class="wid-view-more">ดูทั้งหมด</a>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Apple new mac book 2015</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">ดูล่าสุด</h2>
                            <a href="#" class="wid-view-more">ดูทั้งหมด</a>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">สินค้าใหม่</h2>
                            <a href="#" class="wid-view-more">ดูทั้งหมด</a>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                            <div class="single-wid-product">
                                <a href="single-product.html"><img src="<?php echo base_url(); ?>img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End product widget area -->
        <script type="text/javascript">
            $(document).ready(function () {

                $('#imgSmile').mouseover(function () {

                    $(this).animate({width: "1000px"}, 'slow');
                });

                $('#imgSmile').mouseout(function ()
                {
                    $(this).animate({width: "250px"}, 'slow');
                });
            });
        </script>
    