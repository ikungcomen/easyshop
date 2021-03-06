

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
                    <h1><a href="./"><img src="<?php echo base_url(); ?>img/logo.png"></a></h1>
                </div>
            </div>

            <!--<div class="col-sm-6">
            <?php
            $countProduct = 0;
            foreach ($this->cart->contents() as $items) {
                $countProduct+=$items['qty'];
            }
            ?>
                <div class="shopping-item">
                    <a href="cart.html">Cart - <span class="cart-amunt">$<?php echo $this->cart->format_number($this->cart->total()); ?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $countProduct; ?></span></a>
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
                    <h2>Payment Check</h2>
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
                    <h2 class="sidebar-title">Payment Check | ตรวจสอบการชำระเงิน</h2>
                    <table cellspacing="0" class="shop_table cart">
                        <thead>
                            <tr>
                                <th class="product-remove">เลขที่การชำระเงิน</th>
                                <th class="product-remove">เลขที่การสั่งซื้อ</th>
                                <th class="product-price">จำนวนเงินที่ชำระ</th>
                                <th class="product-name">โอนเข้าธนาคาร</th>
                                <th class="product-name">สถานะการตรวจสอบ</th>
                                <th class="product-name" colspan="2">จัดการ</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($payment as $row) { ?>
                                <tr>
                                    <td><?php echo $row['payment_key']; ?></td>
                                    <td><?php echo $row['payment_order_key']; ?></td>
                                    <td><?php echo $this->cart->format_number($row['payment_price']); ?></td>
                                    <td><?php echo $row['bank_number']." ".$row['bank_name']." ".$row['bank_branch']; ?></td>
                                    <?php if($row['payment_status'] == "O"){?>
                                        <td><font color="red">ยังไม่อนุมัติ</font></td>
                                    <?php }else if($row['payment_status'] == "P" || $row['payment_status'] == "S"){?>
                                        <td><font color="green">อนุมัติเรียบร้อย</font></td>
                                    <?php }?>
                                    <?php if($row['payment_status'] == "P" || $row['payment_status'] == "O"){?>
                                        <td><a  class="btn btn-primary" href="<?php echo base_url(); ?>index.php/frontend/CheckpaymentController/adjust/<?php echo $row['payment_key']; ?>/<?php echo $row['payment_order_key']; ?>">อนุมัติ</a></td>
                                    <td><a  class="btn btn-warning" href="<?php echo base_url(); ?>index.php/frontend/CheckpaymentController/unadjust/<?php echo $row['payment_key']; ?>/<?php echo $row['payment_order_key']; ?>">ยกเลิก</a></td>
                                    <?php }else{?>
                                    <td colspan="2"><font color="green">จัดส่งสินค้าเรียบร้อยแล้ว</font></td>
                                    <?php }?>
                                                
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>


    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {

    });


</script>
