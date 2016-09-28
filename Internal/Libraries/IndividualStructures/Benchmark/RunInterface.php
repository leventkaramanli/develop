<?php namespace ZN\IndividualStructures\Benchmark;

use stdClass;

interface RunInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Test
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $test
    // @return Run
    //
    //--------------------------------------------------------------------------------------------------------
    public function test($test) : Run;

    //--------------------------------------------------------------------------------------------------------
    // Result
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return stdClass
    //
    //--------------------------------------------------------------------------------------------------------
    public function result() : stdClass;
}
