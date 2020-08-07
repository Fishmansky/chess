<?php
//Klasa króla
class King extends Piece {
	public function __construct(){
		$this->ptype = 6;
		$this->state = 0;
	}
	public function getRange(){
		$range = array($this->rmv1, $this->rmv2, $this->rmv3, $this->rmv4, $this->bmv1, $this->bmv2, $this->bmv3, $this->bmv4);
		return $range;
	}

public $bmv1 = array("X" => 1, "Y" => 1);
public $bmv2 = array("X" => 1, "Y" => -1);
public $bmv3 = array("X" => -1, "Y" => 1);
public $bmv4 = array("X" => -1, "Y" => -1);
                                            
public $rmv1 = array("X" => 1, "Y" => 0);
public $rmv2 = array("X" => -1, "Y" => 0);
public $rmv3 = array("X" => 0, "Y" => 1);
public $rmv4 = array("X" => 0, "Y" => -1);
}
?>
