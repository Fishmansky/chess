<?php
//klasa Pionka
class Pawn extends Piece {
	public function __construct(){
		$this->ptype = 1;
		$this->state = 0; //state 0 = figura wolna, nie będąca celem ataku
	}
	//funkcja zwracająca zakres ruchów
	public function getRange(){
		$range = array($this->pawnmv1, $this->pawnmv2);
		return $range;
	}
	//zakres ruchów
	public $pawnmv1 = array("X" => 1, "Y" => 0);
	public $pawnmv2 = array("X" => 2, "Y" => 0);
}
?>
