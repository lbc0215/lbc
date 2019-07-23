<?php 

$str = "aabbccdddeerrtyhgfzxxlloo";

function ddd(){
	$arr = str_split($str);
	foreach ($arr as $k => $v) {
		if (substr_count($arr, $v)==1) {
			return $k;
		}
	}
}








 ?>