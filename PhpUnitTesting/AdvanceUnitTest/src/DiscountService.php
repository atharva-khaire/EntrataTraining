<?php
namespace App;

class DiscountService {
    public function calculateDiscount($price, $userType) {
        if ($price < 0) throw new \InvalidArgumentException("Invalid price");
        return match($userType) {
            'premium' => $price * 0.8,
            'regular' => $price * 0.9,
            default => $price
        };
    }
}
