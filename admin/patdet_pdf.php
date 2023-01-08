<?php
require_once '../FPDF/fpdf.php';
require_once '../config.php';

$query="SELECT tbl_patient.user_id,tbl_patient.u_name,tbl_login.email, 
							 tbl_patient.gender,tbl_patient.dob,tbl_patient.bloodgrp
							 FROM tbl_login
							 JOIN tbl_patient
							 ON tbl_patient.l_id = tbl_login.l_id";
$data = mysqli_query($con,$query);
   if(isset($_POST['btn_pdf']))
   {
    $pdf =new FPDF('p','mm','a4');
    $pdf->SetFont('arial','b','14');
    $pdf->AddPage();

   
    $pdf->cell('10','10','id','1','0','C');
    $pdf->cell('30','10','Name','1','0','C');
    $pdf->cell('60','10','Email','1','0','C');
    $pdf->cell('30','10','Gender','1','0','C');
    $pdf->cell('30','10','DoB','1','0','C');
    $pdf->cell('33','10','Employement','1','1','C');
    
    $pdf->SetFont('arial','','12');
    while($row = mysqli_fetch_assoc($data))   
    {
        $pdf->cell('10','10',$row['user_id'],'1','0','C');
        $pdf->cell('30','10',$row['u_name'],'1','0','C');
        $pdf->cell('60','10',$row['email'],'1','0','C');
        $pdf->cell('30','10',$row['gender'],'1','0','C');
        $pdf->cell('30','10',$row['dob'],'1','0','C');
        $pdf->cell('33','10',$row['bloodgrp'],'1','1','C');
    } 
    $pdf->Output();

}
	?>