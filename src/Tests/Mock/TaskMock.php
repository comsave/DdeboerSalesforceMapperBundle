<?php

namespace LogicItLab\Salesforce\MapperBundle\Tests\Mock;

use LogicItLab\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * @Salesforce\SObject(name="Task")
 */
class TaskMock
{
    /**
     * @var string
     * @Salesforce\Field(name="Id")
     */
    protected $id;

    /**
     * @var string
     * @Salesforce\Field(name="Subject")
     */
    protected $subject;

    public function getId()
    {
        return $this->id;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}