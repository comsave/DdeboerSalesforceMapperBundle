<?php

namespace Tests\LogicItLab\Salesforce\MapperBundle\Mock;

use Phpforce\SoapClient\Result\QueryResult;

class QueryResultMock extends QueryResult
{
    public function __construct($size, $done = true, array $records = array())
    {
        $this->size = $size;
        $this->done = $done;
        $this->records = $records;
    }
}