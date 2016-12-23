<?php
//class
$hand = 'hand';
class human {
	
	var $eye = "eye";
	public function step(){

		$hand = $GLOBALS['hand'].'abc';
		echo  gettype($GLOBALS['hand']);
		echo "$hand";
	}


}
$ex = new human;

$ex->step();


?>