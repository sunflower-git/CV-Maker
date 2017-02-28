<!DOCTYPE html>
<html>
<head>
<title>Resume creator</title>
<link type="text/css" rel="stylesheet" href="styles.css"  >
</head>

<body>
<div id="tani" >

<img id=logo src=images/logo.png width=150 height=111 >
<div id=menubox>
<a href="/?menu=0" id="menu" >Main</a>
<a href="/?menu=1" id="menu" >Resume creator</a>
<a href="/?menu=4" id="menu" >About Us</a>
</div>

<div id=text >
<?
$menu=$_GET['menu'];
if ($menu=='') $menu=0;
$mn[]='\\startpage.php';
$mn[]='\\format.php';
$mn[]='\\category_pdf.php';
$mn[]='\\category_word.php';
$mn[]='\\about_us.php';
echo "<br>";
include $mn[$menu]; 
?>
</div>
<div id=footer>
<font id=footer-text>powered by [Gio],[Anri],[Natia];</font>
</div>
</div>

</body>
</html>