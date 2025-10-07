<?php
class Student
{
    public $name;
    public $rollNo;
    public $marks;
    public function __construct($n, $r, $m)
    {
        $this->name = $n;
        $this->rollNo = $r;
        $this->marks = $m;
    }
}
class Result extends Student
{
    public function __construct($n, $r, $m)
    {
        parent::__construct($n, $r, $m);
    }
    public function detail()
    {
        echo "Name : " . $this->name . "<br>";
        echo "Roll No : " . $this->rollNo . "<br>";
        echo "Marks : " . $this->marks . "<br>";
        if ($this->marks >= 90 && $this->marks <= 100) {
            echo "Grade : A";
        } elseif ($this->marks >= 75 && $this->marks < 90) {
            echo "Grade : B";
        } elseif ($this->marks >= 40 && $this->marks < 75) {
            echo "Grade : C";
        } else {
            echo "Grade : Fail";
        }
    }
}
$r = new Result("abcd", 4, 100);
$r->detail();
?>