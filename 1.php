<?php 
// function actionIndex($n){
// 	if ($n<100||$n>999) {
// 		return false;
// 		$b = floor(value:$n/100);
// 		$s = floor(value:$n/10%10);
// 		$g = floor(value：$n%10);
// 		$sum = $b*$b*$b+$s*$s*$s+$g*$g*$g;
// 		if ($n == $sum) {
// 			return true;
// 		}
// 		return false;
// 		$result = flower(n:123);
// 		var_dump($resurt);
// 	}
// }

$result = quickSort([3,1,10,5,2,7,6,4,9,8]);
echo "<pre>";
var_dump($result);

function quickSort($arr){
	//递归调用退出
	if (count($arr)<=1) {
		return $arr;
	}
	//基准值
	$base = $arr[0];

	//第一堂排序，找比基准值小的，比基准值大的放到2个数组
	$min = [];
	$max = [];

	for ($i=1; $i<count($arr); $i++) { 
		if ($arr[$i]<=$base) {
			$min[] = $arr[$i];
		}else{
			$max[] = $arr[$i];
		}
	}

	$left = quickSort($min);
	$right = quickSort($max);

	return array_merge($left,[$base],$right);
}
echo "<br/>";

function get($n){
    $arr=array();
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            if($j==1||$j==$i){
                echo $arr[$i][$j]=1;
            }else{
                echo $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
            }
            echo "  ";
        }
        echo "<br/>";
    }
}
get(10);

function calSteps($n){
	if ($n==1) return 1;
	if ($n==2) return 2;

	return calSteps($n-1)+calSteps($n-2);
}
echo calSteps(10);

