<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\DiscountService;

class DiscountServiceTest extends TestCase {

    #[DataProvider('discountProvider')]
    public function testDiscount($price, $type, $expected) {
        $service = new DiscountService();
        $this->assertEquals($expected, $service->calculateDiscount($price, $type));
    }

    public static function discountProvider(): array {
        return [
            [1000, 'premium', 800],
            [1000, 'regular', 900],
            [1000, 'guest', 1000],
        ];
    }

    public function testInvalidPrice() {
        $this->expectException(InvalidArgumentException::class);
        $service = new DiscountService();
        $service->calculateDiscount(-100, 'premium');
    }
}
