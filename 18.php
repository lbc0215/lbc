<?php 


function abc(){
	$num = 10;
	$er = decbin($num);
	echo substr_count($er, '1');
}
echo abc();










 ?>