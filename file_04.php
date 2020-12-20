<?php 
echo "hello ";

class Base1{

    private $name;
    function __construct()
    {
        $arg = func_get_args();
        echo "<br>";
        print "\nthis is the base1 class\n<br>";

        if(method_exists($this,$fun="__construct".func_num_args()))
        {
            call_user_func_array(array($this,$fun), $arg);
        }


    }

    function setname($val)
    {
        $this->name=$val;
    }
    function getname()
    {
        print "<br><br> name is : ".$this->name;
    }

    function func()
    {
        print "<br><br>this is passed with 0 arguments  ";
    }
    function func1($val1)
    {
        print "<br><br>this is passed with ".func_num_args()."args";
    }


    function __construct0()
    {
        print "<br><br> argument 0";
    }
    function __construct1()
    {
        print "<br><br> argument 1";
    }
    function __construct2()
    {
        print "<br><br> argument 2";
    }



    function __destruct()
    {
        print "<br><br>destroying ".__CLASS__."<br><br>";
    }

}

class First{
    
    function __construct()
    {
        print "<br>constructor of class first<br>";
    }

    function member1()
    {
        print "<br>member function of class first<br>"; 
    }

}

class Second extends First{
    
    function __construct()
    {
        
        print "<br>constructor of class second<br>";
        parent::__construct();
    }

    function member1()
    {
        print "<br>member function of class second<br>"; 
    }

}





$obj1= new Base1("hello");
$obj1->setname("Raghav");
$obj1->getname();

$obj1->func1("hello","raghav");                  



$obj2 =new Base1();
$obj2->setname("Rastogi");
$obj2->getname();

// you cant overload a constructor or 

echo "<br><br><br>";

$obj3=new First();
$obj4=new Second();
$obj4->member1();






?>
