<?php

namespace LogicItLab\Salesforce\MapperBundle\Tests\Response;

use LogicItLab\Salesforce\MapperBundle\Response\MappedRecordIterator;
use Phpforce\SoapClient\Result\RecordIterator;

class MappedRecordIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testFirstDoesNotThrowOutOfBounds()
    {
        $recordIterator = $this->getMockBuilder('\Phpforce\SoapClient\Result\RecordIterator')
            ->disableOriginalConstructor()
            ->getMock();

        $mapper = $this->getMockBuilder('\LogicItLab\Salesforce\MapperBundle\Mapper')
            ->disableOriginalConstructor()
            ->getMock();

        $iterator = new MappedRecordIterator($recordIterator, $mapper, 'Account');
        
        $this->assertNull($iterator->first());
    }
}