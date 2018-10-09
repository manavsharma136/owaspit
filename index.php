
<?php
if(isset($_REQUEST['file'])){$file=$_REQUEST['file'];}else{$file="content.php";}
?>

<html>
<head>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/gall.css">
</head>
</html>
<?php
include"header.php";
//include"down.php";
include"$file"; 
?>