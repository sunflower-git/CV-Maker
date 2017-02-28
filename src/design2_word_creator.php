<?php
require_once 'PHPWord.php';

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

$name=$_POST['saxeli'];
$surname=$_POST['gvari'];
$dabadeba=$_POST['dabadeba'];
$misamarti=$_POST['misamarti'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

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

// New Word Document
$PHPWord = new PHPWord();

// New portrait section
$section = $PHPWord->createSection();
// Define table style arrays

$styleTable = array('cellMargin'=>80);
$styleFirstRow = array('bgColor'=>'66BBFF');

$styleCell = array('valign'=>'center');


// Define font style for first row
$fontStyle = array('align'=>'center');
$fontStyle1 = array('bold'=>true,'align'=>'center', 'color'=>'006699');
$fontStyle2 = array('bold'=>true, 'italic'=>true, 'align'=>'center');

// Add table style
$PHPWord->addTableStyle('myOwnTableStyle', $styleTable,$styleFirstRow);

// Add table

$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'size'=>16));
$PHPWord->addFontStyle('sStyle', array( 'size'=>16));
$PHPWord->addParagraphStyle('hStyle', array('align'=>'center', 'spaceAfter'=>100));
$PHPWord->addParagraphStyle('lStyle', array('align'=>'left', 'spaceAfter'=>100));
$section->addText('CV', 'rStyle', 'hStyle');
$section->addTextBreak(1);
$section->addImage($target_file, array('width'=>230, 'height'=>200, 'align'=>'right'));
$PHPWord->addParagraphStyle('pStyle', array('align'=>'left', 'spaceAfter'=>20));
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Personal Information','sStyle','pStyle');
//$section->addText('Personal Information','sStyle','pStyle');
$section->addText('________________________________________________','rStyle','lStyle');
// Add row
$PHPWord->addTableStyle('myOwnTableStyle1', $styleTable);
$table = $section->addTable('myOwnTableStyle1');



// Add cells
if ($name!='')
{
$table->addRow(2);
$table->addCell(4000,$styleCell)->addText('Name',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($name,$fontStyle);
}
if ($surname!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Surname', $fontStyle1);
$table->addCell(4000,$styleCell)->addText($surname,$fontStyle);
}
if ($dabadeba!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Date Of Birth',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($dabadeba,$fontStyle);
}
if ($misamarti!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Address',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($misamarti,$fontStyle);
}
if ($mobile!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Mobile',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($mobile,$fontStyle);
}
if ($email!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('E-mail',$fontStyle1);
$table->addCell(4000,$styleCell)->addText($email,$fontStyle);
}

if ($organizacia!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Work Experience','sStyle','pStyle');

//$section->addText('Work Experience','sStyle','pStyle');
$section->addText('________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(3);
$table->addCell(4000,$styleCell)->addText('Dates', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Company Name',$fontStyle1);
$table->addCell(4000, $styleCell)->addText('Job', $fontStyle1);
foreach ($organizacia as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($periodi[$a], $fontStyle2);
$table->addCell(4000, $styleCell)->addText($organizacia[$a],$fontStyle);
$table->addCell(4000, $styleCell)->addText($pozicia[$a], $fontStyle);
}
}
if ($dawesebuleba!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Education','sStyle','pStyle');
//$section->addText('Education','sStyle','pStyle');
$section->addText('________________________________________________','rStyle','lStyle');
$table = $section->addTable('myOwnTableStyle1');
$table->addRow(5);
$table->addCell(4000,$styleCell)->addText('Dates', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Name',$fontStyle1);
$table->addCell(4000, $styleCell)->addText('Faculty', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Profession', $fontStyle1);
$table->addCell(4000, $styleCell)->addText('Degree', $fontStyle1);
foreach($dawesebuleba as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($periodii[$a], $fontStyle2);
$table->addCell(4000, $styleCell)->addText($dawesebuleba[$a],$fontStyle);
$table->addCell(4000, $styleCell)->addText($fakulteti[$a], $fontStyle);
$table->addCell(4000, $styleCell)->addText($specialova[$a], $fontStyle);
$table->addCell(4000, $styleCell)->addText($xarisxi[$a], $fontStyle);
}
}
if ($enebi!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Languages','sStyle','pStyle');
//$section->addText('Languages','sStyle','pStyle');
$section->addText('________________________________________________','rStyle','lStyle');
$listStyle = array('listType'=>PHPWord_Style_ListItem::TYPE_NUMBER);
foreach ($enebi as $a => $b)
{
$section->addListItem($enebi[$a], 0, null, $listStyle);
}
}
if ($skills!='')
{
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Skills','sStyle','pStyle');
//$section->addText('Skills','sStyle','pStyle');
$section->addText('________________________________________________','rStyle','lStyle');
$listStyle = array('listType'=>PHPWord_Style_ListItem::TYPE_BULLET_FILLED);
foreach($skills as $a => $b)
{
$section->addListItem($skills[$a], 0, null, $listStyle);
}
}

$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('dizaini.docx');
echo '<a href="dizaini.docx">Save Word File</a>';
?>