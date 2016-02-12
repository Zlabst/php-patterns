<?php

namespace Pattern;

require 'prototype.php';

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function testPrototype()
    {
        $productA = new ConcreteProductA('A');

        $cloneProductA = $productA->getClone();

        $this->assertEquals($productA->getName(), $cloneProductA->getName());
    }
}