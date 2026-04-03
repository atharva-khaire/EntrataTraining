<?php
use PHPUnit\Framework\TestCase;
use App\OrderService;
use App\PaymentGateway;

class OrderServiceTest extends TestCase {
    public function testOrderSuccess() {
        $mock = $this->createMock(PaymentGateway::class);
        $mock->expects($this->once())
             ->method('charge')
             ->with(100)
             ->willReturn(true);

        $service = new OrderService($mock);
        $this->assertTrue($service->placeOrder(100));
    }
}