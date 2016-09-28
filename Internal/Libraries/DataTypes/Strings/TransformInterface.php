<?php namespace ZN\DataTypes\Strings;

interface TransformInterface
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
    // To Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $split
    //
    //--------------------------------------------------------------------------------------------------------
    public function array(String $string, String $split = ' ') : Array;

    //--------------------------------------------------------------------------------------------------------
    // To Char
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $ascii
    //
    //--------------------------------------------------------------------------------------------------------
    public function char(Int $ascii) : String;

    //--------------------------------------------------------------------------------------------------------
    // To Ascii
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public function ascii(String $string) : Int;
}
