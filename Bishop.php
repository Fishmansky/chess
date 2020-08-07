<?php
//Klasa Gońca
class Bishop extends Piece {
	public $imagew = "<img src=assets/bishopw.png />";
	public $imageb = "<img src=assets/bishopb.png />";
	public function __construct(){
		$this->ptype = 3;
		$this->state = 0;
	}
	
	public function getRange(){
		$range = array($this->bmv1, $this->bmv2, $this->bmv3, $this->bmv4);
		return $range;
	}
	public $bmv1 = array("X" => 1, "Y" => 1);
	public $bmv2 = array("X" => 1, "Y" => -1);
	public $bmv3 = array("X" => -1, "Y" => 1);
	public $bmv4 = array("X" => -1, "Y" => -1);
}
?>
