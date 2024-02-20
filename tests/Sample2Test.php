<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Sample2.php';

class Sample2Test extends TestCase {
    public function testSubtraction() {
        $sample = new Sample2();
        $result = $sample->subtract(5, 2);
        $this->assertEquals(3, $result);
    }
}