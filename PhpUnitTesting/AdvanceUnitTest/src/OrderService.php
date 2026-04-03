<?php
namespace App;

class OrderService {
    private $payment;

    public function __construct($payment) {
        $this->payment = $payment;
    }

    public function placeOrder() {
        return $this->payment->pay();
    }
}
