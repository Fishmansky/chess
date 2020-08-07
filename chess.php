<?php
require('Square.php');
require('Piece.php');
require('Pawn.php');
require('Knight.php');
require('Bishop.php');
require('Rook.php');
require('Queen.php');
require('King.php');

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
		//tworzenie pionów
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

		//tworzenie wierz
		$r1 = new Rook();
		$this->pieces[8] = $r1;
		$this->board[0][0]->takenBy = $this->pieces[8]->ptype;
		$r1->position = $this->board[0][0];
		$r2 = new Rook();
		$this->pieces[9] = $r2;
		$this->board[7][0]->takenBy = $this->pieces[9]->ptype;
		$r2->position = $this->board[7][0];

		//tworzenie skoczków
		$n1 = new Knight();
		$this->pieces[10] = $n1;
		$this->board[1][0]->takenBy = $this->pieces[10]->ptype;
		$n1->position = $this->board[1][0];
		$n2 = new Knight();
		$this->pieces[11] = $n2;
		$this->board[6][0]->takenBy = $this->pieces[11]->ptype;
		$n2->position = $this->board[6][0];

		//tworzenie gońców
		$b1 = new Bishop();
		$this->pieces[12] = $b1;
		$this->board[2][0]->takenBy = $this->pieces[12]->ptype;
		$b1->position = $this->board[2][0];
		$b2 = new Bishop();
		$this->pieces[13] = $b2;
		$this->board[5][0]->takenBy = $this->pieces[13]->ptype;
		$b2->position = $this->board[5][0];

		//tworzenie królowej
		$q = new Queen();
		$this->pieces[14] = $q;
		$this->board[3][0]->takenBy = $this->pieces[14]->ptype;
		$q->position = $this->board[3][0];

		//tworzenie króla
		$k = new King();
		$this->pieces[15] = $k;
		$this->board[4][0]->takenBy = $this->pieces[15]->ptype;
		$k->position = $this->board[4][0];

	}


	public function createBlackPieces(){
	//tworzenie pionów                                 	
        $p1 = new Pawn();
        $this->bpieces[0] = $p1;
        $this->board[0][6]->takenBy = $this->bpieces[0]->ptype;
        $p1->position = $this->board[0][6];
        $p2 = new Pawn();
        $this->bpieces[1] = $p2;
        $this->board[1][6]->takenBy = $this->bpieces[1]->ptype;
        $p2->position = $this->board[1][6];
        $p3 = new Pawn();
        $this->bpieces[2] = $p3;
        $this->board[2][6]->takenBy = $this->bpieces[2]->ptype;
        $p3->position = $this->board[2][6];
        $p4 = new Pawn();
        $this->bpieces[3] = $p4;
        $this->board[3][6]->takenBy = $this->bpieces[3]->ptype;
        $p4->position = $this->board[3][6];
        $p5 = new Pawn();
        $this->bpieces[4] = $p5;
        $this->board[4][6]->takenBy = $this->bpieces[4]->ptype;
        $p5->position = $this->board[4][6];
        $p6 = new Pawn();
        $this->bpieces[5] = $p6;
        $this->board[5][6]->takenBy = $this->bpieces[5]->ptype;
        $p6->position = $this->board[5][6];
        $p7 = new Pawn();
        $this->bpieces[6] = $p7;
        $this->board[6][6]->takenBy = $this->bpieces[6]->ptype;
        $p7->position = $this->board[6][6];
        $p8 = new Pawn();
        $this->bpieces[7] = $p8;
        $this->board[7][6]->takenBy = $this->bpieces[7]->ptype;
        $p8->position = $this->board[7][6];
                                                                
        //tworzenie wierz
        $r1 = new Rook();
        $this->bpieces[8] = $r1;
        $this->board[0][7]->takenBy = $this->bpieces[8]->ptype;
        $r1->position = $this->board[0][7];
        $r2 = new Rook();
        $this->bpieces[9] = $r2;
        $this->board[7][7]->takenBy = $this->bpieces[9]->ptype;
        $r2->position = $this->board[7][7];
                                                                
        //tworzenie skoczków
        $n1 = new Knight();
        $this->bpieces[10] = $n1;
        $this->board[1][7]->takenBy = $this->bpieces[10]->ptype;
        $n1->position = $this->board[1][7];
        $n2 = new Knight();
        $this->bpieces[11] = $n2;
        $this->board[6][7]->takenBy = $this->bpieces[11]->ptype;
        $n2->position = $this->board[6][7];
                                                                
        //tworzenie gońców
        $b1 = new Bishop();
        $this->bpieces[12] = $b1;
        $this->board[2][7]->takenBy = $this->bpieces[12]->ptype;
        $b1->position = $this->board[2][7];
        $b2 = new Bishop();
        $this->bpieces[13] = $b2;
        $this->board[5][7]->takenBy = $this->bpieces[13]->ptype;
        $b2->position = $this->board[5][7];
                                                                
        //tworzenie królowej
        $q = new Queen();
        $this->bpieces[14] = $q;
        $this->board[3][7]->takenBy = $this->bpieces[14]->ptype;
        $q->position = $this->board[3][7];
                                                                
        //tworzenie króla
        $k = new King();
        $this->bpieces[15] = $k;
        $this->board[4][7]->takenBy = $this->bpieces[15]->ptype;
        $k->position = $this->board[4][7];

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

}

$CB = new Chessboard();
$CB->createWhitePieces();
$CB->Move(4,"e4");
$CB->Move(5,"f3");
$CB->Move(11,"f3");
$CB->show();
?>
