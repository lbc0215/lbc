<?php 

$numbers = [3,32,321];
$result = PrintMinNumber($numbers);
echo $result;
function PrintMinNumber($numbers){
	$data = [];
	for ($i=0;$i<3;$i++) { 
		for ($j=0;$j<3;$j++) { 
			for ($k=0;$k<3;$k++) { 
				if ($numbers[$i]!=$numbers[$j] && $numbers[$j]!=$numbers[$k] && $numbers[$i]!=$numbers[$k]) {
					$data[] = $numbers[$i].$numbers[$j].$numbers[$k];
				}
			}
		}
	}
	sort($data);
	return $data[0];
}








 ?>