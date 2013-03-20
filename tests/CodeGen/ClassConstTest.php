<?php

class ClassConstTest extends PHPUnit_Framework_TestCase
{
    function test()
    {
        $const = new CodeGen\ClassConst('VAR','123');
        is( "const VAR = '123';", $const->__toString() );
    }
}

