<?php
//Klasa pola: zawiera informacje o umiejscowieniu (kolumnie i rzędzie), swoim kolorze oraz numerycznej wartości dotyczącej zajmującej ją figury (0 oznacza że pole nie jest obecnie zajęte). Posiada funkcję wyświetlającą klocek która sprawdza czy klocek jest zajęty oraz jaki kolor ma przyjąć. Inną funkcją jest funkcja zwracająca informacje o figurze która zajmuje pole.
class Square {
	public $X;
	public $Y;
	public $bcg;
	public $takenBy;

	public function __construct($file, $rank, $i){
		$this->X = $file;
		$this->Y = $rank;
		$this->bcg = $i;
	}
	
	public function holdingPiece(){
		switch ($this->takenBy){
		case 0:
			return "None";
				break;
		case 1:
			return "Pawn";
				break;
		case 2:
			return "Knight";
				break;
		case 3:
			return "Bishop";
				break;
		case 4:
			return "Rook";
				break;
		case 5:
			return "Queen";
				break;
		case 6:
			return "King";
				break;		
		}
	}

	public function printsq(){
		switch ($this->takenBy){
		case 0:
			if($this->bcg == 1){
                		echo "<img src=assets/w.png />";
                	} else {
                		echo "<img src=assets/b.png />";
                	}
			break;
		case 1:
			if($this->bcg == 1){
				echo "<img src=assets/pinw.png />";
			} else {
				echo "<img src=assets/pinb.png />";
			}
			break;
		case 2:
			if($this->bcg ==1){
				echo "<img src=assets/knightw.png />";
			} else {
				echo "<img src=assets/knightb.png />";
			}
			break;
		case 3:
			if($this->bcg == 1){
				echo "<img src=assets/bishopw.png />";
			} else {
				echo "<img src=assets/bishopb.png />";
			}
			break;
		case 4:
			if($this->bcg ==1){
				echo "<img src=assets/rookw.png />";
			} else {
				echo "<img src=assets/rookb.png />";
			}
			break;
		case 5:
			if($this->bcg == 1){
				echo "<img src=assets/queenw.png />";
			} else {
				echo "<img src=assets/queenb.png />";
			}
			break;
		case 6:
			if($this->bcg == 1){
				echo "<img src=assets/kingw.png />";	
			} else {
				echo "<img src=assets/kingb.png />";
			}
			break;
		}
	}
}

//Klasa ogólna figury - zawiera jej 
class Piece {
	public $ptype;
	public $position;
	public $state;

	public function __construct(){
	}
}

class Pawn extends Piece {
	public $imagew = "<img src=assets/pinw.png />";
	public $imageb = "<img src=assets/pinb.png />";
	public function __construct(){
		$this->ptype = 1;
		$this->state = 0; //state 0 = figura wolna, nie będąca celem ataku
	}

	public function getRange(){
		$range = array($this->pawnmv1, $this->pawnmv2);
		return $range;
	}
	//zakres ruchów
	public $pawnmv1 = array("X" => 1, "Y" => 0);
	public $pawnmv2 = array("X" => 2, "Y" => 0);
}

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

class Queen extends Piece {
	public function __construct(){
		$this->ptype = 5;
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

class Moves {
	public $pawnmv1 = array("X" => 1, "Y" => 0);
	public $pawnmv2 = array("X" => 2, "Y" => 0);

	public $nmv1 = array("X" => 2, "Y" => 1);
	public $nmv2 = array("X" => 2, "Y" => -1);
	public $nmv3 = array("X" => -2, "Y" => 1);
	public $nmv4 = array("X" => -2, "Y" => -1);
	public $nmv5 = array("X" => 1, "Y" => 2);
	public $nmv6 = array("X" => 1, "Y" => -2);
	public $nmv7 = array("X" => -1, "Y" => 2);
	public $nmv8 = array("X" => -1, "Y" => -2);

	public $bmv1 = array("X" => 1, "Y" => 1);
	public $bmv2 = array("X" => 1, "Y" => -1);
	public $bmv3 = array("X" => -1, "Y" => 1);
	public $bmv4 = array("X" => -1, "Y" => -1);

	public $rmv1 = array("X" => 1, "Y" => 0);
	public $rmv2 = array("X" => -1, "Y" => 0);
	public $rmv3 = array("X" => 0, "Y" => 1);
	public $rmv4 = array("X" => 0, "Y" => -1);

}

class Chessboard {
	public $filesnames = array("a", "b", "c", "d", "e", "f", "g", "h");
	public $board;
	public $pieces;//pionki białe
	public $bpieces;//pionki czarne
	public function __construct(){
		$c = 0;
		for($f = 0; $f < 8; $f++){
			for($r = 0; $r < 8; $r++){
				$d = $c%2;
				$this->board[$r][$f] = new Square($f,$r,$d);
				$c++;
			}
			$c++;
		}
	}

	public function show(){
	for($f = 7; $f >= 0; $f--){
		for($r = 0; $r < 8; $r++){
			$this->board[$r][$f]->printsq();
		}
		echo "<br>";
		}
	}

	public function createWhitePieces(){
$p1 = new Pawn();
$this->pieces[0] = $p1;
$this->board[0][1]->takenBy = $this->pieces[0]->ptype;
$p1->position = $this->board[0][1];
$p2 = new Pawn();
$this->pieces[1] = $p2;
$this->board[1][1]->takenBy = $this->pieces[1]->ptype;
$p2->position = $this->board[1][1];
$p3 = new Pawn();
$this->pieces[2] = $p3;
$this->board[2][1]->takenBy = $this->pieces[2]->ptype;
$p3->position = $this->board[2][1];
$p4 = new Pawn();
$this->pieces[3] = $p4;
$this->board[3][1]->takenBy = $this->pieces[3]->ptype;
$p4->position = $this->board[3][1];
$p5 = new Pawn();
$this->pieces[4] = $p5;
$this->board[4][1]->takenBy = $this->pieces[4]->ptype;
$p5->position = $this->board[4][1];
$p6 = new Pawn();
$this->pieces[5] = $p6;
$this->board[5][1]->takenBy = $this->pieces[5]->ptype;
$p6->position = $this->board[5][1];
$p7 = new Pawn();
$this->pieces[6] = $p7;
$this->board[6][1]->takenBy = $this->pieces[6]->ptype;
$p7->position = $this->board[6][1];
$p8 = new Pawn();
$this->pieces[7] = $p8;
$this->board[7][1]->takenBy = $this->pieces[7]->ptype;
$p8->position = $this->board[7][1];

$r1 = new Rook();
$this->pieces[8] = $r1;
$this->board[0][0]->takenBy = $this->pieces[8]->ptype;
$r1->position = $this->board[0][0];
$r2 = new Rook();
$this->pieces[9] = $r2;
$this->board[7][0]->takenBy = $this->pieces[9]->ptype;
$r2->position = $this->board[7][0];

$n1 = new Knight();
$this->pieces[10] = $n1;
$this->board[1][0]->takenBy = $this->pieces[10]->ptype;
$n1->position = $this->board[1][0];
$n2 = new Knight();
$this->pieces[11] = $n2;
$this->board[6][0]->takenBy = $this->pieces[11]->ptype;
$n2->position = $this->board[6][0];

$b1 = new Bishop();
$this->pieces[12] = $b1;
$this->board[2][0]->takenBy = $this->pieces[12]->ptype;
$b1->position = $this->board[2][0];
$b2 = new Bishop();
$this->pieces[13] = $b2;
$this->board[5][0]->takenBy = $this->pieces[13]->ptype;
$b2->position = $this->board[5][0];

$q = new Queen();
$this->pieces[14] = $q;
$this->board[3][0]->takenBy = $this->pieces[14]->ptype;
$q->position = $this->board[3][0];

$k = new King();
$this->pieces[15] = $k;
$this->board[4][0]->takenBy = $this->pieces[15]->ptype;
$k->position = $this->board[4][0];

	}

	public function createBlackPieces(){

	}

	public function isValidMove($dest){
        	$filetomove = $dest[0];
	        $ranktomove = intval($dest[1])-1;
		$filenum = array_search($filetomove, $this->filesnames);
		$bool = false;
		if($this->board[$filenum][$ranktomove]->takenBy == 0){
			$bool = true;
		} else {
			$bool = false;
		}
                return $bool;                                          
        }

	public function movePiece($p, $to){
		$chosenpiece = $this->choosePiece($to);
		if($this->isValidMove($to,$this->pieces[0])){
		$piecetype = $this->releaseSquareOf($p);
		$filetomove = $to[2];
		$ranktomove = intval($to[1])-1;
		$filenum = array_search($filetomove, $this->filesnames);	
		$this->pieces[$p]->position->Y = $ranktomove;
		$this->pieces[$p]->position->X = $filenum;	
		$this->board[$filenum][$ranktomove]->takenBy = $piecetype;
		} else {
		echo "That move is illegal!<br>";
		}
	}	

	public function pposF($dad){
		$f = $this->pieces[$dad]->position->Y;
		return $f;
	}

	public function pposR($dad){
		$r = $this->pieces[$dad]->position->X;
		return $r;
	}

	public function releaseSquareOf($p){
		$f = $this->pposF($p);
		$r = $this->pposR($p);
		$piecetype = $this->board[$f][$r]->takenBy;
		$this->board[$f][$r]->takenBy = 0;
		return $piecetype;
	}

	public function takeSquareBy($pt){
		$f = $this->pposF($pt);
		$r = $this->pposR($pt);
		echo $pt;
		$this->board[$f][$r]->takenBy = $pt;
	}

	public function choosePiece($piece){
		if(strlen($piece) == 2){
			return 1;
		} else if (strlen($piece) == 3){
			$p = substr($piece,0,1);
			switch ($p){
			case "N":
				return 2;
				break;
			case "B":
				return 3;
				break;
			case "R":
				return 4;
				break;
			case "Q":
				return 5;
				break;
			case "K":
				return 6;
				break;
			}
		}

	}

//funkcja sprawdzająca czy ruch jest w zakresie figury
public function CheckPieceRange($piece, $to){	
	$filetomove = $to[0];
	$ranktomove = intval($to[1])-1;
	$filenum = array_search($filetomove, $this->filesnames);
                                                                                                                          
	$inrange = false;
	$moves = $this->pieces[$piece]->getRange();
	$pY = $this->pieces[$piece]->position->Y;
	$pX = $this->pieces[$piece]->position->X;
	if($this->pieces[$piece]->ptype == 3 || $this->pieces[$piece]->ptype == 4 || $this->pieces[$piece]->ptype == 5) {
		foreach($moves as $key => $move){
			for($s = 1; $s < 8; $s++){
				if($this->board[$pY+($move["Y"]*$s)][$pX+$move["X"]*$s]->takenBy != 0 ){
					break;
				} else if($pY+($move["Y"]*$s) == $filenum && $pX+($move["X"]*$s) == $ranktomove){
					$inrange = true;
					break;
				}
			}
		}
	}
	else {
		foreach($moves as $key => $move){
			if($pY+$move["Y"] == $filenum && $pX+$move["X"] == $ranktomove){
				$inrange = true;
			}
		}	
	}
	return $inrange;
}


	public function Move($p, $to){
		if($this->CheckPieceRange($p, $to)){
			if($this->isValidMove($to)){
				$piecetype = $this->releaseSquareOf($p);
				$filetomove = $to[0];
				$ranktomove = intval($to[1])-1;
				$filenum = array_search($filetomove, $this->filesnames);	
				$this->pieces[$p]->position->Y = $ranktomove;
				$this->pieces[$p]->position->X = $filenum;	
				$this->board[$filenum][$ranktomove]->takenBy = $piecetype;
			} 
			else {
				echo "This square is taken!<br>";
			}	
		} 
		else {
			echo "You cannot move like that!<br>";
		}
	}

	public function listPieces(){
		foreach($this->pieces as $key=>$value){
			$ra = $this->pposF($key)+1;
			$fa = $this->filesnames[$this->pposR($key)];
		echo "The pawn is located on ".$fa." file at the ".$ra." rank.";
		}
	}
}

$CB = new Chessboard();
$CB->createWhitePieces();
$CB->Move(4,"e4");
$CB->Move(5,"f3");
$CB->Move(11,"f3");
$CB->show();
?>
