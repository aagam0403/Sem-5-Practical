<?php
class BankAccount
{
    public $accountNumber;
    public $balance;
    public function __construct($n, $b)
    {
        $this->accountNumber = $n;
        $this->balance = $b;
    }
    public function deposit($a)
    {
        $this->balance += $a;
    }
    public function withdraw($a)
    {
        $this->balance -= $a;
    }
    public function getBalance()
    {
        echo "Balance : " . $this->balance . "<br>";
    }
}
$b1 = new BankAccount(1234, 1000);
$b1->deposit(2000);
$b1->getBalance();
$b2 = new BankAccount(6789, 5000);
$b2->withdraw(2000);
$b2->getBalance();
?>