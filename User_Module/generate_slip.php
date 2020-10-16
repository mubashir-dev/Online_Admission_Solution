<?php
session_start();
if(isset($_SESSION["reg_id"]))
{
$reg_id=$_SESSION["reg_id"];
require ("../PDF/fpdf.php");
require_once"../Supporting_Files/connection.php";
$sql="SELECT *FROM personal_info where reg_id='$reg_id'";
$sql_2="SELECT *FROM course where reg_id='$reg_id'";
$fire_2=mysqli_query($con,$sql_2);
  $Date=date("d-m-Y");

if($fire_2)
{
  $course=mysqli_fetch_assoc($fire_2);  
  $Option_one=$course["option_one"];
  $Dep_one=$course["Department_one"];

}
$fire=mysqli_query($con,$sql);
if($fire)
{
    $personal=mysqli_fetch_assoc($fire);
    $name=$personal["first_name"];
    $last_name=$personal["last_name"];
    $name=$name." ".$last_name;
    $Father_name=$personal["father_name"];
    $pic_source=$personal["photo_path"];
}
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('uoh_logo.jpeg',65,5,20);
//		    $this->Image('bug.png',25,5,20);

    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Move to the right
    //$this->Cell(40);
    // Title    
    //$this->SetDrawColor(0,80,180);
    $this->Cell(140,10,'University of Haripur',0,0,'R');
    // Line break
    $this->Ln(15);
	$this->SetFont('Arial','B',14);
	$this->Cell(80);    
    $this->Cell(70,5,"Haripur Kpk Pakistan",0,0,'C');
	$this->Cell(100);
	$this->Cell(95,10,"Last Name:",1,0,"C");
		$this->Cell(80);    $this->Cell(70,5,"Haripur Kpk Pakistan",0,0,'C');

$this->Cell(10); 
		

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-35);
    // Arial italic 8
    $this->SetFont('Arial','',12);

    // Page number
    $this->Cell(0,15,"Provost Signature",0,1,'R');
    $this->Image('sign.png',180,272,20);
    $this->Cell(0,5,'Provost Office',0,1,'R');
$this->Cell(0,5,'   University of Haripur',0,0,'R');
}
function img_set()
{
	    $this->Image('bug.png',25,5,20);
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Cell(100,10,";lsd;sal0",1,1,"C");

   $pdf->Cell(100,10,"ETEA ROLL NO ",0,0,'C');
   for($i=0;$i<5;$i++){
    $pdf->SetFillColor(255,255,0);
    $pdf->Cell(10,10,"{$_SESSION['reg_id']}",1,0,'C');

   }
   
$pdf->Ln(14);
$pdf ->SetFont('Arial','',14);
$pdf->Image("{$pic_source}",170,70,30,40);
$pdf->Ln(15);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(105,10,"{$name}",0,1,'R');
$pdf->Cell(45,10,"Father Name",0,0);
$pdf->Cell(105,10,"{$Father_name}",0,1,'R');
$pdf->Cell(45,10,"Program",0,0);
$pdf->Cell(105,10,"{$Option_one}",0,1,'R');
$pdf->Cell(45,10,"Department",0,0);
$pdf->Cell(105,10,"{$Dep_one}",0,1,'R');
$pdf->Cell(45,10,"Test Date",0,0);
$pdf->Cell(105,10,"{$Date}",0,1,'R');
$pdf->Cell(45,10,"Test Venue",0,0);
$pdf->Cell(105,10,"University of Haripur",0,1,'R');
$pdf->Ln(20);
$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Instructions for Test",0,1,'R');
$pdf->Ln(0);
$pdf ->SetFont('Arial','',8);
$pdf->Cell(100,10,"
1:You will not be permitted to enter the exam if you arrive more than 30 minutes after the scheduled start time. ",0,1); 
$pdf->Cell(100,10," 2 :If you arrive within the first 30 minutes, you will be admitted, but you will not be given any extra time to complete the examination.",0,1); 
 
$pdf->Cell(100,10," 3. You MUST sign the attendance register, if your details do not appear on the register you should seek guidance from the Invigilator. ",0,1);
 
$pdf->Cell(100,10," 4.Valuables should not be brought into the examination room. If you choose to do so, it will be at your own risk. ",0,1);
 
$pdf->Cell(100,10," 5.You MUST bring your student ID card to all your examinations, it should be visible and placed, photograph up on your desk  ",0,1);
 
$pdf->Cell(100,10,"6.Only write your student number, not your name, on each answer book.",0,1); 
 
$pdf->Cell(100,10,"7.A bottle of water and small items of confectionary are allowed in the examination room. Sandwiches, crisps, fizzy and canned drinks are not permitted and will be confiscated. ",0,1);
 
$pdf->Cell(100,10,"8.Remain seated and raise your hand if you wish to attract the attention of the Invigilator during the examination.",0,1); 
 
$pdf->Cell(100,10,"9.During the first 45 minutes from the start of the examination or during the last 30 minutes you will not be permitted to leave the examination room",0,1);
 
$pdf->Cell(100,10,"10.If you wish to leave the examination room for any reason, including having completed the examination, you may only do so with the permission of the Invigilator.",0,1);
 $pdf->Cell(100,10,"11. During and at the end of the examination students must remain seated until the Invigilator has given you permission to leave and collected all exam scripts",0,1);    
$pdf->Output();}
else
{
    header("Location:user_log_in.php");
}
?>