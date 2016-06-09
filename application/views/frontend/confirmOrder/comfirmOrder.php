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
                            <h2>Confirm Order</h2>
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


                                <form id="confirmOrder" action="<?php echo  base_url();?>index.php/frontend/orderController/addOrder"  method="post" >

                                    <div id="customer_details" class="col1-set">
                                        <h3 id="ship-to-different-address">
                                            <!--<label class="checkbox" for="ship-to-different-address-checkbox">ที่อยู่สำหรับจัดส่งสินค้า</label>-->
                                            <h2 class="sidebar-title">Confirm Order | คอนเฟิร์มออร์เดอร์</h2>
                                        </h3>
                                        <label><span class="required">สั่งสินค้าตั้งแต่ 6 ชิ้นขึ้นไป ส่งฟรีทั่วประเทศ </span></label>
                                        <table cellspacing="0" class="shop_table cart">
                                            <thead>
                                                <tr>
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
                                                        <td class="product-name">
                                                            <a href="single-product.html"><?php echo $items['name']; ?></a> 
                                                        </td>

                                                        <td class="product-price">
                                                            <span class="amount"><?php echo $this->cart->format_number($items['price']); ?>&nbsp;บาท</span> 
                                                        </td>

                                                        <td class="product-quantity">
                                                            <div class="quantity buttons_added">
                                                                <?php echo $items['qty']; ?>
                                                            </div>
                                                        </td>

                                                        <td >
                                                            <span class="amount"><?php echo $this->cart->format_number($items['subtotal']); ?>&nbsp;บาท</span> 
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <label>สรุปการสั่งสินค้า</label>
                                        <label>
                                         <?php
                                        $countOrder = 0;
                                        foreach ($this->cart->contents() as $items) {
                                            $countOrder+=$items['qty'];
                                        }?>
                                        <?php if ($countOrder > 5) { ?>
                                            จัดส่งฟรี EMS
                                        <?php } else { ?>
                                            คิดค่าบริการ 50 บาท(ems)
                                        <?php } ?>
                                            &nbsp;&nbsp;&nbsp;
                                        รวมจำนวนสั่งทั้งสิ้น : <strong><span class="amount"></span><?php echo $countOrder; ?>&nbsp;ชิ้น</span></strong>
                                        
                                        &nbsp;&nbsp;&nbsp;
                                        รวมเป็นเงินทั้งสิ้น : <span class="amount"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;บาท</span>
                                        
                                        
                                        
                                        </label>
                                        

                                        <hr>
                                        <div class="shipping_address" style="display: block;">
                                            <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="shipping_country">ที่อยู่สำหรับจัดส่งสินค้า <abbr title="required" class="required"><span class="required">*</span></abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="address" name="address">
                                                    <option value="">Select address for ship...</option>
                                                    <?php foreach ($address as $row) { ?>
                                                        <option value="<?php echo $row['address_key']; ?>"><?php echo $row['adrress_prefix'] . " " . $row['address_name'] . " " . $row['address_lastname'] . " " . $row['address_address'] . " " . $row['address_subdistrict'] . " " . $row['address_city'] . " " . $row['address_state'] . " " . $row['address_country'] . " " . $row['address_zip']; ?></option>
                                                    <?php } ?>


                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row place-order">
                                        <a id="confirm" class="button-s">ยืนยัน</a>
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
        $(document).ready(function () {
            $("#confirm").click(function () {
                var address = $('#address').val();
                if (address == "") {
                    $('#value_message').html('กรุณาระบุ ที่อยู่สำหรับจัดส่งสินค้า');
                    $('#myModal').modal('show');
                } else {
                    $("#confirmOrder").submit();
                }
            });


        });


    </script>
</html>