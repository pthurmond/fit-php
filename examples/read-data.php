<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 11/15/14
 * Time: 4:59 PM
 */
$filepath = 'data/23876840249.fit';

//Read the data that was just created
$fit = new \Fit\Reader(true);
$fit->parseFile($filepath, $debug);

//Delete the written data
unlink($filepath);

//output the resulting data
print_r($fit);