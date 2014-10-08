<?php
namespace Fit;

/**
 * \Fit\Exception factory
 */
class Exception extends \Exception
{
    public static $codes = array(
        1001 => 'Unable to open file for writing.',
        1002 => 'Missing file_id in messages.',
        1003 => 'Unable to open file for reading.',
        1004 => 'Unknown file_type.',
        1005 => 'FileType not set, use ->setFile($type) before adding messages.',
    );

    /**
     * Throw an exception based on one of the codes defined in static::$codes.
     * @param int $code
     * @param string $msg Optional message to pass to Exception, defaults to text
     * as setup in static::$codes.
     * @throws \Fit\Exception
     */
    public static function create($code, $msg = null)
    {
        $msg !== null || $msg = static::$codes[$code];
        throw new static($msg, $code);
    }
}
