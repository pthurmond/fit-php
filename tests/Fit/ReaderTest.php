<?php
namespace Fit;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    private $reader;

    public function setUp()
    {
        $this->reader = new Reader(false);
    }

    public function testReaderGolderMaster()
    {
        $fitFilePath = "tests/files/47695708.FIT";
        $this->reader->parseFile($fitFilePath);
        $this->assertEquals(114, count($this->reader->records));
        $this->assertArrayHasKey('header_size', $this->reader->file_header);
        $this->assertArrayHasKey('protocol_version', $this->reader->file_header);
        $this->assertArrayHasKey('data_size', $this->reader->file_header);
        $this->assertArrayHasKey('data_type', $this->reader->file_header);
    }
}
