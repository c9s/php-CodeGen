<?php

class ClassMemberTest extends PHPUnit_Framework_TestCase
{
    function test()
    {
        $member = new CodeGen\ClassMember('foo',1,'public');
        is('public $foo = 1;',
            $member->__toString());
    }
}

