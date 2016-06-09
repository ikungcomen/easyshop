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
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/shopController/index">เลือกซื้อสินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/productController/index">สินค้า</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/frontend/cartController/index">ตะกร้าสินค้า</a></li>
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
                            <h2>Address For Shiped</h2>
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
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                                    <div id="customer_details" class="col1-set">
                                        <h3 id="ship-to-different-address">
                                            <!--<label class="checkbox" for="ship-to-different-address-checkbox">ที่อยู่สำหรับจัดส่งสินค้า</label>-->
                                            <h2 class="sidebar-title">ที่อยู่สำหรับจัดส่งสินค้า</h2>
                                        </h3>
                                        <div class="shipping_address" style="display: block;">
                                            <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="shipping_country">ประเทศ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="shipping_country" name="shipping_country">
                                                    <option value="">Select a country…</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>

                                                </select>
                                            </p>
                                            <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="shipping_country">ชื่อ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                            </p>
                                            <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="shipping_country">นามสกุล <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                            </p>
                                            <p id="shipping_company_field" class="form-row form-row-wide">
                                                <label class="" for="shipping_company">บริษัท</label>
                                                <input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                            </p>

                                            <p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="shipping_address_1">ที่อยู่ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="shipping_address_1" name="shipping_address_1" class="input-text ">
                                            </p>

                                            <p id="shipping_address_2_field" class="form-row form-row-wide address-field">
                                                <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text ">
                                            </p>

                                            <p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="shipping_city">จังหวัด <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Town / City" id="shipping_city" name="shipping_city" class="input-text ">
                                            </p>

                                            <p id="shipping_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="shipping_state">เขต / อำเภอ<abbr title="required" class="required"><span class="required">*</span></abbr></label>
                                                <input type="text" id="shipping_state" name="shipping_state" placeholder="State / County" value="" class="input-text ">
                                            </p>
                                            <p id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                <label class="" for="shipping_postcode">รหัสไปรษณีย์ <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Postcode / Zip" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                            </p>
                                            <p id="order_comments_field" class="form-row notes">
                                                <label class="" for="order_comments">รายละเอียดเพิ่มเติม</label>
                                                <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                            </p>
                                            <div class="clear"></div>


                                        </div>

                                    </div>


                                    <div class="form-row place-order">

                                        <!--<input type="submit" data-value="Place order" value="ส่งข้อมูล" id="place_order" name="ส่งข้อมูล" class="button alt">-->
                                           <a id="save" class="button-s">บันทึกข้อมูล</a>

                                    </div>
                                </form>

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
      $(document).ready(function() {
        $("#save").click(function() {
            var user_name        = $('#user_name').val();
            var user_lastname    = $('#user_lastname').val();
            var user_email       = $('#user_email').val();
            var user_phonenumber = $('#user_phonenumber').val();
            var user_username    = $('#user_username').val();
            var user_password    = $('#user_password').val();

            if(user_name == ""){
                $('#value_message').html('กรุณาระบุ ชื่อ');
                $('#myModal').modal('show');
            }else if (user_lastname == "") {
                $('#value_message').html('กรุณาระบุ นามสกุล');
                $('#myModal').modal('show');
            }else if (user_email == "") {
                $('#value_message').html('กรุณาระบุ อีเมลล์');
                $('#myModal').modal('show');
            }else if (user_phonenumber == "") {
                $('#value_message').html('กรุณาระบุ เบอร์ติดต่อ');
                $('#myModal').modal('show');
            }else if (user_username == "") {
                $('#value_message').html('กรุณาระบุ ชื่อผู้ใช้');
                $('#myModal').modal('show');
            }else if (user_password == "") {
                $('#value_message').html('กรุณาระบุ รหัสผ่าน');
                $('#myModal').modal('show');
            }else{
                    $.ajax({  
                        type: "POST",  
                        url: "<?php echo base_url();?>index.php/frontend/registerController/check_username",  
                        data: { user_username: user_username}  
                    })  
                    .done(function(data) {  
                        if(data == 1){
                            $('#value_message').html('เนื่องจากมีข้อมูลชื่อผู้ใช้ : '+user_username+' อยู่แล้วในระบบ');
                            $('#myModal').modal('show');
                        }else{
                            $('#message_confirm').html('ท่านต้องการบันทึกข้อมูล ใช่หรือไม่');
                            $('#myModal_confirm').modal('show');
                            $('#confirm').click(function(){
                                $("#register").submit();
                            });
                        }
                    });  
                    
            }
        });
        
  
      });
        

  </script>
</html>