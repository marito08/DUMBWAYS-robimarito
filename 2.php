<?php
function minmax(){
	$data = ['h','g','a','b','d','f'];
	$max = min($data);
	$min = max($data);
	return $result = [$max,$min];
}

var_dump(minmax())
?>