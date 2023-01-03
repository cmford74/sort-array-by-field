<?php
function sortArrayByField(&$arr, $col, $dir = SORT_DESC) {
		if($dir == 'SORT_ASC'){
			$d = SORT_ASC;
		} else {
			$d = SORT_DESC;
		}
		$sort_col = array();
		foreach ($arr as $key=> $row) {
			$sort_col[$key] = $row[$col];
		}
	
		array_multisort($sort_col, $d, $arr);
	}
