<?php

namespace LogicItLab\Salesforce\MapperBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class Field extends Annotation
{
    public $name;
}