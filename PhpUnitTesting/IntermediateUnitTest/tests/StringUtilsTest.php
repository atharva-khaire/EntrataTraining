<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\StringUtils;

class StringUtilsTest extends TestCase
{
    #[DataProvider('palindromeProvider')]
    public function testPalindrome($input, $expected)
    {
        $util = new StringUtils();
        $this->assertEquals($expected, $util->isPalindrome($input));
    }

    public static function palindromeProvider(): array
    {
        return [
            ["madam", true],
            ["racecar", true],
            ["hello", false],
            ["abc", false],
        ];
    }
}