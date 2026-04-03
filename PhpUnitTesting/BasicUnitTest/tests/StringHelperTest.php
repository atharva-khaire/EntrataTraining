<?php
use PHPUnit\Framework\TestCase;
use App\StringHelper;

class StringHelperTest extends TestCase {
    public function testToUpper() {
        $helper = new StringHelper();
        $this->assertEquals("HELLO", $helper->toUpper("hello"));
    }
}
