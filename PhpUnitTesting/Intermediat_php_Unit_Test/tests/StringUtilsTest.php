<?php
use PHPUnit\Framework\TestCase;
use App\StringUtils;

class StringUtilsTest extends TestCase {
    /**
     * @dataProvider data
     */
    public function testPalindrome($input,$expected) {
        $this->assertEquals($expected,(new StringUtils())->isPalindrome($input));
    }
    public function data() {
        return [
            ["madam",true],
            ["hello",false],
            ["A man, a plan, a canal: Panama",true],
            ["",true],
        ];
    }
}
