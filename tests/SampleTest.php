<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Sample.php';

class SampleTest extends TestCase {
    public function testAddition() {
        $sample = new Sample();
        $result = $sample->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtraction() {
        $sample = new Sample();
        $result = $sample->subtract(5, 2);
        $this->assertEquals(3, $result);
    }
}