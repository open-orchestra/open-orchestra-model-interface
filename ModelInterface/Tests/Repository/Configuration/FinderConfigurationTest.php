<?php

namespace OpenOrchestra\ModelInterface\Tests\Repository;

use OpenOrchestra\ModelInterface\Repository\Configuration\FinderConfiguration;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DocumentTest
 */
class FinderConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string|null $search
     * @param array|null  $columns
     * @param array|null  $descriptionEntity
     *
     * @dataProvider provideConfigurationCreation
     */
    public function testConfigurationCreation($descriptionEntity, $search, $columns)
    {
        $request = $this->createRequest($search, $columns);
        $configuration = FinderConfiguration::generateFromRequest($request);
        if(FinderConfiguration::isArrayOrNull($descriptionEntity))
            $configuration->setDescriptionEntity($descriptionEntity);
        $this->finderConfigurationTest($configuration, $search, $descriptionEntity, $columns);
    }

    /**
     * @return array
     */
    public function provideConfigurationCreation()
    {
        return array(
            array(array(),'search', array()),
            array(null,'', null),
            array('','search', 'string'),
        );
    }

    /**
     * @param null|string $search
     * @param null|array  $columns
     *
     * @return Request
     */
    protected function createRequest($search = null, $columns = null)
    {
        $request = new Request();
        if($search !== NULL)
            $request->request->set('search', $search);
        if($columns !== NULL)
            $request->request->set('columns', $columns);

        return $request;
    }

    /**
     * @param FinderConfiguration $configuration
     * @param string              $search
     * @param null|string|array   $descriptionEntity
     * @param null|string|array   $columns
     */
    protected function finderConfigurationTest(FinderConfiguration $configuration, $search, $descriptionEntity, $columns){
        $this->isTypeOrNull("is_string", $configuration->getSearch(), $search);
        $this->isTypeOrNull("is_array", $configuration->getDescriptionEntity(), $descriptionEntity);
        $this->isTypeOrNull("is_array", $configuration->getColumns(), $columns);
    }

    /**
     * @param string $method
     * @param mixed $valueToTest
     * @param mixed $testValue
     */
    protected function isTypeOrNull($method, $valueToTest, $testValue)
    {
        if($method($testValue)) {
            $this->assertEquals($valueToTest, $testValue);
        } else {
            $this->assertEquals($valueToTest, null);
        }
    }
}
