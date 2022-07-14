<?php
foreach ($result as $row){}
foreach ($result2 as $row2){}
foreach ($result3 as $row3){}
foreach ($result4 as $row4){}
foreach ($result5 as $row5){}
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = base_url('images/favicon152.jpg');
        $this->Image($image_file, 15, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $image_file = base_url('images/logo@2x.jpg');
        $this->Image($image_file, 85, 10, 40, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $image_file = base_url('images/footer-logo2.png');
        $this->Image($image_file, 55, 135, 100, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Maulana Rezi');
$pdf->SetTitle('');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);

// add a page
$pdf->AddPage('L', 'A5');

// new style
$style = array(
    'border' => false,
    'padding' => 0,
    'fgcolor' => array(128,0,0),
    'bgcolor' => false
);

/* VARIABEL */
$stat1=$row->state_1;
$stat2=$row->state_2;
$time=mdate('%Y-%m-%d %H:%i:%s');
if ($this->session->userdata('lang')=='en'){
    $subject=$row2->j_subject_en;
    $type=$row2->j_type_en;
    $industry=$row2->j_industry_en;
    $function=$row2->j_function_en;
}
elseif ($this->session->userdata('lang')=='id'){
    $subject=$row2->j_subject_id;
    $type=$row2->j_type_id;
    $industry=$row2->j_industry_id;
    $function=$row2->j_function_id;
}
if ($this->session->userdata('lang')=='en'){ 
    if    ($row->state_1=='N'&&$row->state_2='N'){$status='Applicant';}
    elseif($row->state_1=='Y'&&$row->state_2='N'){$status='Selection';}
    elseif($row->state_1=='Y'&&$row->state_2='Y'){$status='Accepted';}
    elseif($row->state_1=='Q'&&$row->state_2='S'){$status='Employee';}
    elseif($row->state_1=='S'&&$row->state_2='Q'){$status='Not Employee';}
    elseif($row->state_1=='S'&&$row->state_2='S'){$status='Fail Selection';}
    elseif($row->state_1=='Q'&&$row->state_2='Q'){$status='Not Qualified';}
}
elseif ($this->session->userdata('lang')=='id'){ 
    if    ($row->state_1=='N'&&$row->state_2='N'){$status='Peserta';}
    elseif($row->state_1=='Y'&&$row->state_2='N'){$status='Seleksi';}
    elseif($row->state_1=='Y'&&$row->state_2='Y'){$status='Penerimaan';}
    elseif($row->state_1=='Q'&&$row->state_2='S'){$status='Karyawan';}
    elseif($row->state_1=='S'&&$row->state_2='Q'){$status='Bukan Karyawan';}
    elseif($row->state_1=='S'&&$row->state_2='S'){$status='Gagal Seleksi';}
    elseif($row->state_1=='Q'&&$row->state_2='Q'){$status='Tidak Berkualifikasi';}
}
if ($this->session->userdata('lang')=='en'){ 
    if($row->r_lvl=='3'){$atp='Alumni';}
    elseif($row->r_lvl=='5'){$atp='Public';}
}
elseif ($this->session->userdata('lang')=='id'){ 
    if($row->r_lvl=='3'){$atp='Alumni';}
    elseif($row->r_lvl=='5'){$atp='Umum';}
}
if ($this->session->userdata('lang')=='en'){ 
    if($row->state_f=='Y'){$afa='Granted';}
    elseif($row->state_f=='N'){$afa='Revoked';}
}
elseif ($this->session->userdata('lang')=='id'){ 
    if($row->state_f=='Y'){$afa='YA';}
    elseif($row->state_f=='N'){$afa='TIDAK';}
}
/* VARIABEL */







// CONTENT
$pdf->write2DBarcode(base_url('/career_center/read_vacancy/').$row->id_job, 'QRCODE,H', 180, 10, 15, 15, $style, 'N');

$pdf->Text(15, 88, $this->lang->line('panel67fo'));
$pdf->write2DBarcode($row->id_apply, 'QRCODE,H', 15, 95, 25, 25, $style, 'N');
$pdf->Text(92, 88, $this->lang->line('panel68fo'));
$pdf->write2DBarcode($row->id_job, 'QRCODE,H', 92, 95, 25, 25, $style, 'N');
$pdf->Text(170, 88,$this->lang->line('panel19thif'));
$pdf->write2DBarcode($row->id_file, 'QRCODE,H', 170, 95, 25, 25, $style, 'N');

$pdf->Text(15, 30, $this->lang->line('panel5thif').$row3->u_name);    
$pdf->Text(15, 35, $this->lang->line('panel6thif').$subject);
$pdf->Text(15, 40, $this->lang->line('panel7thif').$type);
$pdf->Text(15, 45, $this->lang->line('panel8thif').$industry);
$pdf->Text(15, 50, $this->lang->line('panel9thif').$function);

$pdf->Text(15, 60, $this->lang->line('panel10thif').$row4->u_name);
$pdf->Text(15, 65, $this->lang->line('panel11thif').$row4->u_birthplace.' '.$row4->u_birthdate);
$pdf->Text(15, 70, $this->lang->line('panel12thif').$row4->u_le_place.' '.$row4->u_last_edu);
$pdf->Text(15, 75, $this->lang->line('panel13thif').$row4->u_le_year_entry.'-'.$row4->u_le_year_gradu);
$pdf->Text(15, 80, $this->lang->line('panel14thif').$row4->u_nation);

$pdf->Text(140, 30, $this->lang->line('panel15thif').$atp);
$pdf->Text(140, 35, $this->lang->line('panel18thif').$time);


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output($row->id_apply.'-'.$this->session->userdata('lang'), 'I');

//============================================================+
// END OF FILE
//============================================================+
