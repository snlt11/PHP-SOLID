O - Open Closed Principle

Software Entities(class, function , module) should open for Extension, but closed for modification.

<?php

interface PaymentMethods
{
    public function process($amount);
}

class PaymentProcessor
{
    public function process(PaymentMethods $paymentMethod, $amount)
    {
        $paymentMethod->process($amount);
    }
}

class KPay implements PaymentMethods
{
    public function process($amount)
    {
        echo "KPay processed successfully \n";
    }
}

class CreditCard implements PaymentMethods
{
    public function process($amount)
    {
        //process credit card
        echo "Credit card processed successfully \n";
    }
}

$paymentProcessor = new PaymentProcessor();

$paymentProcessor->process(new KPay, 100);

$paymentProcessor->process(new CreditCard, 100);
