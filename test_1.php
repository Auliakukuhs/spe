<?php
    function narcissistic($n){
		
		if(is_numeric( $n ) && floor( $n ) != $n){
			return "Angka tidak boleh desimal";
		}else{
			$sum = 0;
			$temp = $n;
			$totalDigits = strlen($n);
			while($n != 0) {
				$r = $n%10;
				$sum = $sum+pow($r, $totalDigits);
				$n = floor($n/10);
			}
			if($sum == $temp) {
				return "True";
			} else {
				return "False";
			}	
		}
}

echo narcissistic(153);
?>