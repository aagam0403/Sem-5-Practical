<?php
class Employee
{
    public $name;
    public $id;
    public $salary;
    public function set($n, $i, $s)
    {
        $this->name = $n;
        $this->id = $i;
        $this->salary = $s;
    }
    public function get()
    {
        echo "Name : " . $this->name . "<br>";
        echo "ID : " . $this->id . "<br>";
        echo "Salary : " . $this->salary . "<br>";
    }
}
$e = new Employee();
$e->set("ABCD", 123, 100000);
$e->get();
?>