<?php
include 'sample_code.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test_sample_func()
    {
        $result = sample_func();
        $this->assertEquals(2, $result);
    }
}

// vendor/bin/phpunit SampleTest.php
?>