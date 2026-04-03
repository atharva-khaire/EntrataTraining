
<?php
use PHPUnit\Framework\TestCase;
use App\OrderService;
use App\PaymentGateway;

class OrderServiceTest extends TestCase {

    public function testPlaceOrder() {
        $mock = $this->createMock(PaymentGateway::class);
        $mock->method('pay')->willReturn(true);

        $order = new OrderService($mock);
        $this->assertTrue($order->placeOrder());
    }
}

