<?php
namespace App;

class FileReader {
    public function readFile($path) {
        if (!file_exists($path)) throw new \Exception("File not found");
        return file_get_contents($path);
    }
}
