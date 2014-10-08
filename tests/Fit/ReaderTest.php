<?php
namespace Fit;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    private $reader;

    public function setUp()
    {
        $fitFilePath = "tests/files/47695708.FIT";
        if (is_file($fitFilePath)) {
            $handle = @fopen($fitFilePath, 'rb');
        }
        $reader = new \Zend_Io_Reader($handle);
        $this->reader = new Reader($reader);
    }

    public function testReaderGolderMaster()
    {
        $this->reader->parseFile();
        $this->assertEquals(114, count($this->reader->records));
        $this->assertArrayHasKey('header_size', $this->reader->file_header);
        $this->assertArrayHasKey('protocol_version', $this->reader->file_header);
        $this->assertArrayHasKey('data_size', $this->reader->file_header);
        $this->assertArrayHasKey('data_type', $this->reader->file_header);
    }
}
