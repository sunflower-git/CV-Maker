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


$PHPWord=new PHPWord();

$section=$PHPWord->CreateSection();
$PHPWord->addFontStyle('rStyle', array('bold'=>true, 'size'=>16));

$PHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
$section->addText('CV', 'rStyle', 'pStyle');
$section->addTextBreak(2);
$section->addImage($target_file, array('width'=>210, 'height'=>210, 'align'=>'center'));
$section->addTextBreak(2);
$styleTable = array('borderSize'=>6, 'borderColor'=>'006699', 'cellMargin'=>80);
$styleCell = array('valign'=>'center');
$styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);
$fontStyle = array('bold'=>true, 'align'=>'center');
$PHPWord->addTableStyle('myOwnTableStyle', $styleTable);
$table = $section->addTable('myOwnTableStyle');
if ($name!='')
{
$table->addRow(2);
$table->addCell(4000,$styleCell)->addText('Name',$fontStyle);
$table->addCell(4000,$styleCell)->addText($name,$fontStyle);
}
if ($surname!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Surname', $fontStyle);
$table->addCell(4000,$styleCell)->addText($surname,$fontStyle);
}
if ($dabadeba!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Date Of Birth',$fontStyle);
$table->addCell(4000,$styleCell)->addText($dabadeba,$fontStyle);
}
if ($misamarti!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Address',$fontStyle);
$table->addCell(4000,$styleCell)->addText($misamarti,$fontStyle);
}
if ($mobile!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('Mobile',$fontStyle);
$table->addCell(4000,$styleCell)->addText($mobile,$fontStyle);
}
if ($email!='')
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText('E-mail',$fontStyle);
$table->addCell(4000,$styleCell)->addText($email,$fontStyle);
}
if ($organizacia!='')
{
$section->addTextBreak(2);
$section->addText('Work Experience','rStyle','pStyle');
$section->addTextBreak(2);
$table = $section->addTable('myOwnTableStyle');
$table->addRow(3);
$table->addCell(4000,$styleCell)->addText('Dates', $fontStyle);
$table->addCell(4000, $styleCell)->addText('Company Name',$fontStyle);
$table->addCell(4000, $styleCell)->addText('Job', $fontStyle);
foreach ($organizacia as $a => $b)
{
$table->addRow();
$table->addCell(4000,$styleCell)->addText($periodi[$a],$fontStyle);
$table->addCell(4000,$styleCell)->addText($organizacia[$a],$fontStyle);
$table->addCell(4000,$styleCell)->addText($pozicia[$a],$fontStyle);
}
}
if ($dawesebuleba!='')
{
$section->addTextBreak(2);
$section->addText('Education','rStyle','pStyle');
$table2 = $section->addTable('myOwnTableStyle');
$table2->addRow(2);
$table2->addCell(4000,$styleCell)->addText('Dates', $fontStyle);
$table2->addCell(4000, $styleCell)->addText('Name',$fontStyle);
$table2->addCell(4000, $styleCell)->addText('Faculty', $fontStyle);
$table2->addCell(4000, $styleCell)->addText('Profession', $fontStyle);
$table2->addCell(4000, $styleCell)->addText('Degree', $fontStyle);
foreach($dawesebuleba as $a => $b)
{
$table2->addRow();
$table2->addCell(4000,$styleCell)->addText($periodii[$a], $fontStyle);
$table2->addCell(4000, $styleCell)->addText($dawesebuleba[$a],$fontStyle);
$table2->addCell(4000, $styleCell)->addText($fakulteti[$a],$fontStyle);
$table2->addCell(4000, $styleCell)->addText($specialoba[$a],$fontStyle);
$table2->addCell(4000, $styleCell)->addText($xarisxi[$a],$fontStyle);
}
}
if ($enebi!='')
{
$section->addTextBreak(2);
$section->addText('Languages','rStyle','pStyle');
$listStyle = array('listType'=>PHPWord_Style_ListItem::TYPE_NUMBER);

foreach ($enebi as $a => $b)
{
$section->addListItem($enebi[$a], 0, null, $listStyle);
}
}
if ($skills!='')
{
$section->addTextBreak(2);
$section->addText('Skills','rStyle','pStyle');
$PHPWord->addFontStyle('myOwnStyle', array('color'=>'FF0000'));

$PHPWord->addParagraphStyle('P-Style', array('spaceAfter'=>95));

$listStyle = array('listType'=>PHPWord_Style_ListItem::TYPE_NUMBER_NESTED);
foreach($skills as $a => $b)
{
$section->addListItem($skills[$a], 0, 'myOwnStyle', $listStyle, 'P-Style');
}
}



$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');

$objWriter->save('CV.docx');
echo '<a href="CV.docx">Save Word File</a>';

?>