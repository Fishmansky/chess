<?php
//Klasa Wieży
class Rook extends Piece {
	public function __construct(){
		$this->ptype = 4;
		$this->state = 0;
	}
	public function getRange(){
		$range = array($this->rmv1, $this->rmv2, $this->rmv3, $this->rmv4);
		return $range;
	}

public $rmv1 = array("X" => 1, "Y" => 0);
public $rmv2 = array("X" => -1, "Y" => 0);
public $rmv3 = array("X" => 0, "Y" => 1);
public $rmv4 = array("X" => 0, "Y" => -1);
}
?>
