<?php

require_once '../FPDF/fpdf.php';
require_once '../config.php';
$d=1;
$query="SELECT * FROM tbl_c_packages ";
                                            $data = mysqli_query($con,$query);
                                            while($res=mysqli_fetch_assoc($data))
                                            {
                                                $uid = $res['p_id'];
                                                $lid = $res['l_id'];
                                                $vdate = $res['visit_date'];
                                                $status= $res['status'];
                                                $query1="SELECT * FROM tbl_packages where p_id = '$uid' ";
                                                $data1 = mysqli_query($con,$query1);
                                                while($res1=mysqli_fetch_assoc($data1))
                                                {
                                                    $pic = $res1['p_image'];
                                                    $pname = $res1['p_name'];

                                                
                                                $query2="SELECT * FROM tbl_patient where l_id = '$lid' ";
                                                $data2 = mysqli_query($con,$query2);
                                                while($res2=mysqli_fetch_assoc($data2))
                                                {
                                                        $name = $res2['u_name'];
                                                        
                                               
                                                
$data = mysqli_query($con,$query);
   if(isset($_POST['btn_pdf']))
   {
    $pdf =new FPDF('p','mm','a4');
    $pdf->SetFont('arial','b','14');
    $pdf->AddPage();

   
    $pdf->cell('13','10','sl no','1','0','C');
    $pdf->cell('30','10','Name','1','0','C');
    $pdf->cell('50','10','Treatment Name','1','0','C');
    $pdf->cell('50','10','Arriving Date','1','0','C');
    $pdf->cell('50','10','Payment Status','1','1','C');
    
    $pdf->SetFont('arial','','12');
    while($row = mysqli_fetch_assoc($data))   
    {
        $pdf->cell('13','10',$d++,'1','0','C');
        $pdf->cell('30','10',$res2['u_name'],'1','0','C');
        $pdf->cell('50','10',$res1['p_name'],'1','0','C');
        $pdf->cell('50','10',$res['visit_date'],'1','0','C');
        $pdf->cell('50','10',$res['status'],'1','1','C');
    } 
    $pdf->Output();
   
}
	?>
    <?php
                                                }}}  
                                                ?>