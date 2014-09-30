<?php
namespace Fit;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    private $reader;

    public function setUp()
    {
        $this->reader = new Reader(false);
    }

    public function testFalse()
    {
        $this->assertTrue(false);
    }
}
