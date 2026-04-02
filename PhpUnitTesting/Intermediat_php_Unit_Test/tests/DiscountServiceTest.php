<?php
use PHPUnit\Framework\TestCase;
use App\DiscountService;

class DiscountServiceTest extends TestCase {
    /**
     * @dataProvider provider
     */
    public function testDiscount($price, $type, $expected) {
        $s = new DiscountService();
        $this->assertEquals($expected, $s->calculateDiscount($price, $type));
    }
    public function provider() {
        return [
            [100,'premium',80],
            [100,'regular',90],
            [100,'guest',100],
        ];
    }
    public function testInvalid() {
        $this->expectException(InvalidArgumentException::class);
        (new DiscountService())->calculateDiscount(-1,'premium');
    }
}
