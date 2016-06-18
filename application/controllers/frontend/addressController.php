<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addressController
 *
 * @author anurartkae
 */
class addressController extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->library('mpdf-development/mpdf');
        $this->load->library('cart');
        $this->load->Model('tb_user');
        $this->load->Model('tb_order');
        $this->load->Model('tb_address');
        $this->load->Model('DBhelper');
    }

    public function index() {
        
    }

    public function print_address($address_key) {
        $result = $this->tb_address->get_address($address_key);
        echo $address_key;
        //$mpdf = new mPDF('win-1252', 'A4', '', '', 20, 15, 48, 25, 10, 10);
        $mpdf = new mPDF();
        $mpdf->useOnlyCoreFonts = true;    // false is default
        $mpdf->SetProtection(array('print'));
        //$mpdf->SetTitle("Acme Trading Co. - Invoice");
        //$mpdf->SetAuthor("Acme Trading Co.");
        //$mpdf->SetWatermarkText("Paid");
        //$mpdf->showWatermarkText = true;
        //$mpdf->watermark_font = 'DejaVuSansCondensed';
        //$mpdf->watermarkTextAlpha = 0.1;
        //$mpdf->SetDisplayMode('fullpage');

        
        $html = "<html>";
        $html.= "<head>";

        $html.="</head>";
        $html.="<body>";
        $html.="<table  width='100%'>";
        $html.="<tr><td colspan='2' ><h4>ที่อยู่ผู้รับ</h4></td><td colspan='2' ><h4>ที่อยู่ผู้ส่ง</h4></td></tr>";//align=\"center\"
        $html.="<tr><td colspan='2'><hr></td><td colspan='2'><hr></td></tr>";
        //$html.="<hr>";
        $html.="<tr>";
        $html.="<td colspan='2'>ชื่อ ".$result[0]['adrress_prefix'].$result[0]['address_name']." ".$result[0]['address_lastname']."</td>";
        $html.="<td colspan='2'>ชื่อ นายอนุราช แก้วละมุล</td>";
        $html.="</tr>";

        $html.="<tr>";
        $html.="<td colspan='2'>".$result[0]['address_address']."</td>";
        $html.="<td colspan='2'>เลขที่ 270 ห้อง 1B ถ.เจริญนคร <br>ซอย 14 แยก 12</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'> ตำบล/แขวง ".$result[0]['address_subdistrict']."</td>";
        $html.="<td colspan='2'>ตำบล/แขวง คลองต้นไทร</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'>อำเภอ/เขต ".$result[0]['address_city']."</td>";
        $html.="<td colspan='2'>อำเภอ/เขต คลองสาน</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'>จังหวัด ".$result[0]['address_state']."</td>";
        $html.="<td colspan='2'>จังหวัด กรุงเทพมหานคร</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'>ประเทศ ".$result[0]['address_country']."</td>";
        $html.="<td colspan='2'>ประเทศ ไทย</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'>รหัสไปรษณีย์ ".$result[0]['address_zip']."</td>";
        $html.="<td colspan='2'>รหัสไปรษณีย์ 10600</td>";
        $html.="</tr>";
        
        $html.="<tr>";
        $html.="<td colspan='2'>เบอร์ติดต่อ ".$result[0]['address_phone']."</td>";
        $html.="<td colspan='2'>เบอร์ติดต่อ 0895854562</td>";
        $html.="</tr>";
        
        
        $html.="<tr><td colspan='2'><hr></td><td colspan='2'><hr></td></tr>";
        $html.="</table>";
        
        $html.="</body>";
        $html.="</html>";



        $this->mpdf = new mPDF('th', 'A4', '', 'THSaraban'); //เรียกใช้งาน mPDF ส่งค่า parameter เข้าไปครับ//'th', 'A7', '0'
        $this->mpdf->WriteHTML($html); // สั่งให้ mPDF เขียนไฟล์ pdf
        $this->mpdf->Output(); // จากนั้นส่งชื่อไฟล์ออกมาครับผม 
        exit;
    }

}
