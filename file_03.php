<?php

echo "helo";



class User{
    public $name;
    public $email;
    public $mobile;
    public $dob;
    public $gender;

    function somemessage()
    {
        echo "i am a user0";
    }

    function display()
    {
        print "name : $this->name";
    }
}



class Student extends User{
    public $course;
    public $branch;

    function display()
    {
        print "name : $this->name";
        print "course : $this->course";
    }

}
$user= new User();
$user->name='ABCD';
echo $user->name."<br>";
$user->somemessage();
$user->display();




$user= new Student();
$user->name='ABCD';
echo $user->name."<br>";
$user->course="mca";
$user->branch="na";
$user->somemessage();
$user->display();



?>
