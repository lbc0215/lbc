<?php 

//设置值
nm(1,1300);

//定义类
function nm($n,$m){
	$st = range($n,$m);
	//查询字符串中所出现1的次数
	echo substr_count(join($st),'1');
}




 ?>