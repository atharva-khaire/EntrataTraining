<?php
namespace App;

class OrderService {
    private $gateway;
    public function __construct(PaymentGateway $gateway) {
        $this->gateway = $gateway;
    }
    public function placeOrder($amount) {
        if ($amount <= 0) throw new \InvalidArgumentException("Invalid amount");
        return $this->gateway->charge($amount);
    }
}
