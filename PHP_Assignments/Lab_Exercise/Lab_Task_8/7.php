<?php
interface PaymentGateway
{
    public function processPayment($amount);
}
class PayPal implements PaymentGateway
{
    public function processPayment($amount)
    {
        echo "Paypal Amount : " . $amount . "<br>";
    }
}
class CreditCard implements PaymentGateway
{
    public function processPayment($amount)
    {
        echo "CreditCard Amount : " . $amount . "<br>";
    }
}
$p = new PayPal();
$c = new CreditCard();
$p->processPayment(1000);
$c->processPayment(500);
?>