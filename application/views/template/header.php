<html>
<head>
<title><?=$title?></title>
<?=link_tag('/assets/css/main.css')?>
</head>
<body>
<?php
define('DEBUGGING', true);

if (defined('DEBUGGING') && DEBUGGING) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1'); // Only if debugging!
}
?>
<div id="nav">
	<a class='title' href="/index.php"><?php echo $title?></a>
	<button class='chrome big_dark'>
		<div class='chrome_button'>
			<a href="/product.php" >Product Browser</a>
		<div>
	</button>
	<button class='chrome big_dark'>
		<div class='chrome_button'>
			<a href="/order.php" >Order Browser</a>
		<div>
	</button>
	<button class='chrome big_dark'>
		<div class='chrome_button'>
			<a href="/index.php" >About this Site</a>
		<div>
	</button>
</div>
<div id='column2'>
