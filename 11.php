<?php 

$str = "student. a am I";
function get($str){
	$arr = explode(" ",$str);
	krsort($arr);
	$arr = implode(" ",$arr);
	return $arr;
}
print_r(get($str));








 ?>