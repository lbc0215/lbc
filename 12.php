<?php 

//逻辑运算

echo Sum_Solution4(100);
function Sum_Solution4($n){
    $sum = 0;
    $n && $sum = $n+Sum_Solution4($n-1);
    return $sum;
}









 ?>