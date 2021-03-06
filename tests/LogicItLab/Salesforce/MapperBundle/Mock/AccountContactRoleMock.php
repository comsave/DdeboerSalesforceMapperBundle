<?php

namespace Tests\LogicItLab\Salesforce\MapperBundle\Mock;

use LogicItLab\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * @Salesforce\SObject(name="AccountContactRole")
 */
class AccountContactRoleMock
{
    /**
     * @Salesforce\Field(name="Id")
     */
    protected $id;

    /**
     * @Salesforce\Relation(field="AccountId", name="Account",
     *   class="LogicItLab\Salesforce\MapperBundle\Tests\Mock\AccountMock"
     * )
     */
    protected $account;

    /**
     * @Salesforce\Relation(field="ContactId", name="Contact",
     *   class="LogicItLab\Salesforce\MapperBundle\Tests\Mock\ContactMock"
     * )
     */
    protected $contact;
}