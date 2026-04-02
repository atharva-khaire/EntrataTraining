<?php
use PHPUnit\Framework\TestCase;
use App\ArrayHelper;

class ArrayHelperTest extends TestCase {
    public function testSum() {
        $helper = new ArrayHelper();
        $this->assertEquals(6, $helper->sum([1,2,3]));
    }
}
