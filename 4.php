<?php 
	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case 'addition':
				return $arg1 + $arg2;
				break;
			case 'substraction':
				return $arg1 - $arg2;
				break;
			case 'multiplication':
				return $arg1 * $arg2;
				break;
			case 'division':
				return $arg1 - $arg2;
				break;
		}

	}
	$result = mathOperation(1,2,"addition");
	echo $result;
 ?>