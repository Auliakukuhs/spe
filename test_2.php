<?php
	function parity($integers) {
	  $l = count($integers);
	  $a = 0;
	  $even;
	  $odd;
	  for($i=0;$i<$l;$i++){
		if(($integers[$i]%2)==0){
		  $even = $integers[$i];
		  $a++;
		}
		else{
		  $odd = $integers[$i];
		}
	  }
	  if($a==1)
		return $even;
	  else
		return $odd;
	}
	
	$val = [2, 4, 0, 100, 4, 11, 2602, 36];
	echo parity($val);
?>