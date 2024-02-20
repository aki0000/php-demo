<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../src/Sample1/Sample1.php';

class Sample1Test extends TestCase {
    public function testAddition() {
        $sample = new Sample1();
        $result = $sample->add(2, 3);
        $this->assertEquals(5, $result);
    }
}