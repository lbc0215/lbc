<?php 


function Find(){
	$target = 7;
	$array = [[1,2,8,9,],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
	if ($this->Find($target,$array)) {
		echo "存在";
	}else{
		echo "不存在";
	}
}





 ?>