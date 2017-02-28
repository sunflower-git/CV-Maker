<?php
include("fpdf/fpdf.php");


$pdf= new FPDF();
//var_dump(get_class_methods($pdf));


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $p=true;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$dawesebuleba=$_POST['txt_edu_name'];
$fakulteti=$_POST['txt_edu_faculty'];
$specialoba=$_POST['txt_edu_profession'];
$xarisxi=$_POST['txt_edu_degree'];
$periodii=$_POST['txt_edu_period'];

$enebi=$_POST['txt_lang_name'];

$skills=$_POST['txt_skill_name'];

$organizacia=$_POST['txt_work_name'];
$pozicia=$_POST['txt_work_position'];
$periodi=$_POST['txt_work_period'];

$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(0,10,'CV',1,1,'C');

$pdf->Ln();


$pdf->SetFont('Arial','',12);
//$pdf->Cell(50,7,'Image:',1,"R");

$pdf->image($target_file,null,null,50,55);

$pdf->Ln();

if ($_POST['saxeli']!='')
{
$pdf->Cell(50,7,'Name:',1,"R");
$pdf->Cell(140,7,$_POST['saxeli'],1);
}

$pdf->Ln();
if ($_POST['gvari']!='')
{
$pdf->Cell(50,7,'Surname:',1,"R");
$pdf->Cell(140,7,$_POST['gvari'],1);
}
$pdf->Ln();
if ($_POST['dabadeba']!='')
{
$pdf->Cell(50,7,'Date of birthday:',1,"R");
$pdf->Cell(140,7,$_POST['dabadeba'],1);
}
$pdf->Ln();
if ($_POST['misamarti']!='')
{
$pdf->Cell(50,7,'Address:',1,"R");
$pdf->Cell(140,7,$_POST['misamarti'],1);
}
$pdf->Ln();
if ($_POST['mobile']!='')
{
$pdf->Cell(50,7,'Mobile:',1,"R");
$pdf->Cell(140,7,$_POST['mobile'],1);
}
$pdf->Ln();
if ($_POST['email']!='')
{
$pdf->Cell(50,7,'E-mail:',1,"R");
$pdf->Cell(140,7,$_POST['email'],1);
}
$pdf->Ln();

$pdf->SetFont('Arial','',12);
$pdf->Ln();
if ($organizacia!='')
{
//samushao gamocdileba
$cnt_work=0;
$pdf->Ln();
$pdf->Cell(0,10,'Work Experience',0,0,'C');
foreach ($organizacia as $a => $b)
{
$cnt_work++;
$pdf->Ln();
$pdf->Cell(70,7,"$cnt_work Company Name:",1,"R");
$pdf->Cell(120,7,$organizacia[$a],1);
$pdf->Ln();
$pdf->Cell(70,7,'Position:',1,"R");
$pdf->Cell(120,7,$pozicia[$a],1);
$pdf->Ln();
$pdf->Cell(70,7,'Period:',1,"R");
$pdf->Cell(120,7,$periodi[$a],1);
$pdf->Ln();
}
}
if ($dawesebuleba!='')
{
$pdf->Ln();
$cnt_edu=0;
//ganatleba/kvalifikacia
$pdf->Cell(0,10,'Education',0,0,'C');
$cnt_edu=0;
foreach($dawesebuleba as $a => $b)
{
$cnt_edu++;
$pdf->Ln();
$pdf->Cell(70,7,"$cnt_edu School/University",1,"R");
$pdf->Cell(120,7,$dawesebuleba[$a],1);
$pdf->Ln();

$pdf->Cell(70,7,'Faculty:',1,"R");
$pdf->Cell(120,7,$fakulteti[$a],1);
$pdf->Ln();

$pdf->Cell(70,7,'Profession::',1,"R");
$pdf->Cell(120,7,$specialoba[$a],1);
$pdf->Ln();
$pdf->Cell(70,7,'Degree:',1,"R");
$pdf->Cell(120,7,$xarisxi[$a],1);
$pdf->Ln();
$pdf->Cell(70,7,'Period:',1,"R");
$pdf->Cell(120,7,$periodii[$a],1);
$pdf->Ln();
}
}
$pdf->Ln();
if ($enebi!='')
{
$cnt_lang=0;
foreach ($enebi as $a => $b)
{
$cnt_lang++;
$pdf->Cell(70,7,"Language $cnt_lang:",1,"R");
$pdf->Cell(120,7,$enebi[$a],1);
$pdf->Ln();
}
}
if ($skills!='')
{
$pdf->Ln();
$cnt_skill=0;
foreach ($skills as $a => $b)
{
$cnt_skill++;
$pdf->Cell(70,7,"skills $cnt_skill:",1,"R");
$pdf->Cell(120,7,$skills[$a],1);
$pdf->Ln();
}
}
$pdf->Ln();


$pdf->Output();
?>