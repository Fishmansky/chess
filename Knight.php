<?php
//klasa Skoczka
class Knight extends Piece {
	public function __construct(){
		$this->ptype = 2;
		$this->state = 0;
	}
	public function getRange(){
		$range = array($this->nmv1, $this->nmv2, $this->nmv3, $this->nmv4, $this->nmv5, $this->nmv6, $this->nmv7, $this->nmv8);
		return $range;
	}

	public $nmv1 = array("X" => 2, "Y" => 1);
	public $nmv2 = array("X" => 2, "Y" => -1);
	public $nmv3 = array("X" => -2, "Y" => 1);
	public $nmv4 = array("X" => -2, "Y" => -1);
	public $nmv5 = array("X" => 1, "Y" => 2);
	public $nmv6 = array("X" => 1, "Y" => -2);
	public $nmv7 = array("X" => -1, "Y" => 2);
	public $nmv8 = array("X" => -1, "Y" => -2);	
}
?>
