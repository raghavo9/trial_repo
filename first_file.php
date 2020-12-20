<?php
class Square{

	// state info
	private $side;
	
	// constructor
	/*
	public function __construct(){
		echo 'A Square is created<br />';
	}
	*/
	public function __construct(){
		$arg = func_get_args();
		var_dump($arg);
		$num_arg = func_num_args();
		echo 'Constructor Called with '.$num_arg.'<hr />';
        /*
        
        switch($num_arg){
			case 0: $this->__construct0(); break;
			case 1: $this->__construct1($arg[0]); break;
			case 2: $this->__construct2($arg[0],$arg[1]); break;
			default: echo 'No match';
        }
        

        */

        if(method_exists($this,$fun='__construct'.$num_arg))
        {
            call_user_func_array(array($this,$fun),$arg);
        }


	}
	
	function __construct0(){
		echo 'No arguments';
	}
	
	function __construct1($arg1){
		echo '1 argument : '.$arg1;
	}
	
	function __construct2($arg1,$arg2){
		echo '2 argument : '.$arg1.' : '.$arg2;
	}


	// destructor
	public function __destruct(){
		echo 'A Square is Destroyed<br />';
	}

	public function add(){
		$args = func_get_args();
		// func_num_args()
		// var_dump($args);
		if(empty($args)) return 0;
		foreach($args as $param){
			$sum = $sum + $param;
		}
		return $sum;
	}
	
	
	/* java 
	Square()

*/
    // setter
	function setSide($side){
		if(is_numeric($side)){
			$this->side = $side;
		}else{
			$this->side = 0;
		}
	}
	
	// getter
	function getSide(){
		return $this->side;
	}
	
	// operations
	function area(){
		return $this->side*$this->side;
	}
	
	function perimeter(){
		return $this->side*4;
	}
	
}

$sq1 = new Square();
$sq1->setSide("abc");
echo "Area is : ".$sq1->area().'<br />'; 
echo "Perimeter is : ".$sq1->perimeter().'<br />'; 


$sq2 = new Square(25);
$sq2->setSide(5);
echo "Area is : ".$sq2->area().'<br />'; 
echo "Perimeter is : ".$sq2->perimeter().'<br />'; 

$sq3 = new Square(7);
echo "Area is : ".$sq3->area().'<br />'; 
echo "Perimeter is : ".$sq3->perimeter().'<br />'; 
echo $sq3->add(1,2).'<br />';
echo $sq3->add(1,2,3).'<br />';
echo $sq3->add(1,2,3,4).'<br />';
echo $sq3->add(1,2,3,4,5).'<br />';
echo $sq3->add(1,2,3,4,5,6).'<br />';

$sq = new Square(); // 0
$sq = new Square(1); // 1 
$sq = new Square(1,2); // 2
//$sq = new Square(1,2,3); // 3
//$sq = new Square(1,2,3,4); // 4

?>
