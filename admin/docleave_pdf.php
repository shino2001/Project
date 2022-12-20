<?php
require_once '../FPDF/fpdf.php';
require_once '../config.php';

$query="SELECT tbl_leave.lv_id,tbl_leave.l_id,tbl_leave.type,tbl_leave.fdate,tbl_leave.tdate,tbl_leave.reason,tbl_leave.status, 
							 tbl_doctor.d_name
							 FROM tbl_doctor
							 JOIN tbl_leave
							 ON tbl_leave.l_id = tbl_doctor.l_id ";
$data = mysqli_query($con,$query);
   if(isset($_POST['btn_pdf']))
   {
    $pdf =new FPDF('p','mm','a4');
    $pdf->SetFont('arial','b','14');
    $pdf->AddPage();

   
    $pdf->cell('10','10','sl','1','0','C');
    $pdf->cell('30','10','Name','1','0','C');
    $pdf->cell('30','10','From','1','0','C');
    $pdf->cell('30','10','To','1','0','C');
    $pdf->cell('40','10','Type','1','0','C');
    $pdf->cell('28','10','Reason','1','0','C');
    $pdf->cell('30','10','Status','1','1','C');
    
    $pdf->SetFont('arial','','12');
    while($row = mysqli_fetch_assoc($data))   
    {
        $pdf->cell('10','10',$row['lv_id'],'1','0','C');
        $pdf->cell('30','10',$row['d_name'],'1','0','C');
        $pdf->cell('30','10',$row['tdate'],'1','0','C');
        $pdf->cell('30','10',$row['fdate'],'1','0','C');
        $pdf->cell('40','10',$row['type'],'1','0','C');
        $pdf->cell('28','10',$row['reason'],'1','0','C');
        $pdf->cell('30','10',$row['status'],'1','1','C');
    } 
    $pdf->Output();

}
	?>