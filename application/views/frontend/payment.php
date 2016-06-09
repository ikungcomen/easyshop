<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Easy Shop</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css">

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
                <div class="col-md-6">
                    <div class="user-menu">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/AccountController/index"><i class="fa fa-user"></i> บัญชีของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index"><i class="fa fa-user"></i> ตะกร้าสินค้าของฉัน</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/frontend/checkoutController/index"><i class="fa fa-user"></i> แจ้งการชำระเงิน</a></li>
                        </ul>
                    </div>

                </div>
                
                <div class="col-md-6">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><?php if ($this->session->userdata('logincomplete') != 1){ ?>เข้าสู่ระบบ / สมัครสมาชิก<?php }else{?><?php echo "สวัสดีคุณ ". $this->session->userdata('user_name')." ".$this->session->userdata('user_lastname'); ?> <?php }?></span><!--<span class="value">USD </span>--><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php if ($this->session->userdata('logincomplete') != 1){ ?>
                                        <li class="text-left"><a href="<?php echo base_url();?>index.php/frontend/loginController/index">เข้าสู่ระบบ</a></li>
                                        <li class="text-left"><a href="<?php echo base_url();?>index.php/frontend/registerController/index">สมัครสมาชิก</a></li>
                                    <?php  }?>
                                    
                                    
                                    <?php if($this->session->userdata('logincomplete') == 1){?>
                                        <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/orderController/index">ประวัติการสั่งซื้อ</a></li>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/AccountController/addreddShip">ที่อยู่สำหรับจัดส่ง</a></li>
                                            <li class="text-left"><a href="<?php echo base_url(); ?>index.php/frontend/loginController/logout"><font color="red">ออกจากระบบ</font></a></li>
                                            
                                    <?php }?>
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
                        <h1><a href="./"><img src="<?php echo base_url();?>img/logo.png"></a></h1>
                    </div>
                </div>
                
                <!--<div class="col-sm-6">
                    <?php $countProduct = 0; 
                        foreach ($this->cart->contents() as $items) { 
                            $countProduct+=$items['qty'];
                    }?>
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$<?php echo $this->cart->format_number($this->cart->total());?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $countProduct;?></span></a>
                    </div>
                </div>-->
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
                        <li ><a href="<?php echo base_url();?>index.php/indexController/index">หน้าแรก</a></li>
                        <li><a href="<?php echo base_url();?>index.php/frontend/shopController/index">เลือกซื้อสินค้า</a></li>
                        <li><a href="<?php echo base_url();?>index.php/frontend/productController/index">สินค้า</a></li>
                        <li><a href="<?php echo base_url();?>index.php/frontend/cartController/index">ตะกร้าสินค้า</a></li>
                        <li><a href="<?php echo base_url();?>index.php/frontend/checkoutController/index">แจ้งการชำระเงิน</a></li>
                        <li class="active"><a href="<?php echo base_url();?>index.php/frontend/PaymentController/index">วิธีการชำระเงิน</a></li>
                        <li><a href="<?php echo base_url();?>index.php/frontend/contactController/index">ติดต่อเรา</a></li>
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
                        <h2>Payment</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">ขั้นตอนการเลือกซื้อสินค้า</h2>
                        <p>1.เลือกซื้อสินค้าจากเมนู</p>
                        <p>&nbsp;&nbsp;  - เลือกซื้อสินค้า</p>
                        <p>&nbsp;&nbsp;  - สินค้า</p>
                        <p>2.ตรวจสอบสินค้าที่จะสั่งและยอดสินค้า</p>
                        <p>3.ส่งคำสั่งซื้อ</p>
                        <p>6.กรอกที่อยู่สำหรับจัดส่งสินค้าหรือเลือกจากรายการที่มีอยู่สำหรับจัดส่งสินค้า ที่มีอยู่แล้วในระบบ</p>
                        <p>7.ยืนยันสั่งซื้อสินค้า</p>
                        <p>8.โอนเงินชำระค่าสินค้า</p>
                        <p>10.แจ้งการโอนเงิน</p>
                        <p>11.รอรับสินค้า</p>
                        <h2 class="sidebar-title">ขั้นตอนการชำระเงินค่าสินค้า</h2>
                        <p>1.โอนเงินเข้าบัญชีตามยอดสั่งสินค้า (รายละเอียดบัญชีด้านล่าง) &nbsp;&nbsp;&nbsp;***กรุณาเก็บสลิปหลังการโอนไว้ด้วย</p>
                        <p>2.แจ้งการชำระเงินในระบบ หรือ ช่องการการติดต่อดังนี้</p>
                        <p>&nbsp;&nbsp;Tel  : 0895854562</p>
                        <p>&nbsp;&nbsp;Line ID  : ikungcomen</p>
                        <p>3.รอการตรวจสอบการโอนเงินและคอนเฟิร์ม</p>
                        <p>4.เมื่อได้รับการคอมเฟิร์มการโอนเงินเรียบร้อย  ทางเราจะจัดส่งสินค้าให้ด่วนที่สุด</p>
                        <p>5.รอรับสินค้า</p>
                        <h2 class="sidebar-title">บัญชีธนาคาร</h2>
                        <hr>
                        <p>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?php echo base_url();?>img/bank/thai.jpg" width="350px" hieght = "350px">
                                    
                                </div>
                                <div class="col-md-3">
                                    <p>เลขที่บัญชี : 1682206882 (ออมทรัพย์)</p>
                                    <p>ชื่อบัญชี : นายอนุราช แก้วละมุล</p>
                                    <p>ธนาคาร : ไทยพาณิชย์</p>
                                    <p>สาขา : ตึก CP Tower สีลม</p>
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url();?>img/bank/kasikorn.jpg" width="280px" hieght = "280px">
                                </div>
                                <div class="col-md-3">
                                    <p>เลขที่บัญชี : 9082131288 (ออมทรัพย์)</p>
                                    <p>ชื่อบัญชี  : นายอนุราช แก้วละมุล</p>
                                    <p>ธนาคาร  : กสิกร</p>
                                    <p>สาขา   : ซีคอนสแคว ศรีนครินทร์</p>
                                </div>
                            </div>
                        </p>
                        <hr>
                    </div>
                </div>
               <!-- <?php if($this->session->userdata('logincomplete') != 1){?>
                <div class="col-md-6">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info">Returning customer? &nbsp;<a class="showlogin"  href="<?php echo base_url();?>index.php/frontend/loginController/index" >Click here to login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>-->
                           
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
                            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
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
    <script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo base_url();?>js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php echo base_url();?>js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>js/bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/script.slider.js"></script>
  </body>
</html>