<?php
namespace Fit;

interface IoReader
{
    public function readUInt8();

    public function readUInt16();

    public function readUInt32LE();

    public function readString8($length, $charList = "\0");

    public function readUInt16LE();
}
