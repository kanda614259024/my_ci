<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

	<h1>Hello world</h1>
	<hr>
	<h1>HTML Helper</h1>
    <p> OL() </p>
	<?php
	$list = array('a','b','c');
	echo ol($list);
	?>

    <hr>

    <p> UL() </p>
	<?php
	echo ul($list);
	?>

	aaaa
	<?php echo br (5);?>
	bbbb
    <hr>
    <p>heading()</p>
    <?php 
    echo heading ("Text",1);
    echo heading ("Text",2);
    echo heading ("Text",3);
    echo heading ("Text",4);
    echo heading ("Text",5);
    echo heading ("Text",6);
    ;?>
    <hr>
   <p>nbs()</p>
   testing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; programming
   <br>

   <?php
    echo 'name';
    echo nbs(6);
    echo 'Kanda';
;?>

</body>
</html>