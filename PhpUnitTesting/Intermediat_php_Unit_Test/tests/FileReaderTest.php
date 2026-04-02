<?php
use PHPUnit\Framework\TestCase;
use App\FileReader;

class FileReaderTest extends TestCase {
    public function testNotFound() {
        $this->expectException(Exception::class);
        (new FileReader())->readFile("invalid.txt");
    }
}
