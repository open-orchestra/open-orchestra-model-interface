<?php

namespace OpenOrchestra\ModelInterface\Tests\Mapping\Annotations;

use Phake;
use OpenOrchestra\ModelInterface\Mapping\Annotations\Document;

/**
 * Class DocumentTest
 */
class DocumentTest extends \PHPUnit_Framework_TestCase
{
    protected $node;

    /**
     * setUp
     */
    public function setUp()
    {
        $this->node = Phake::mock('OpenOrchestra\ModelInterface\Model\NodeInterface');
    }

    /**
     * Test getSource
     */
    public function testGetSource()
    {
        $document = new Document(array('sourceField' => 'name'));
        $this->assertSame('getName', $document->getSource($this->node));
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionSource
     */
    public function testExceptionGetSource($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->getSource($this->node);
    }

    /**
     * @return array
     */
    public function provideExceptionSource()
    {
        $parameters0 = array();

        $parameters1 = array('sourceField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }

    /**
     * Test getGenerated
     */
    public function testGetGenerated()
    {
        $document = new Document(array('generatedField' => 'nodeId'));
        $this->assertSame('getNodeId', $document->getGenerated($this->node));
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionGetGenerated
     */
    public function testExceptionGetGenerated($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->getGenerated($this->node);
    }

    /**
     * @return array
     */
    public function provideExceptionGetGenerated()
    {
        $parameters0 = array();

        $parameters1 = array('generatedField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }

    /**
     * Test setGenerated
     */
    public function testSetGenerated()
    {
        $document = new Document(array('generatedField' => 'nodeId'));
        $this->assertSame('setNodeId', $document->setGenerated($this->node));
    }

    /**
     * @param array  $parameters
     * @param string $exception
     *
     * @dataProvider provideExceptionSetGenerated
     */
    public function testExceptionSetGenerated($parameters, $exception)
    {
        $document = new Document($parameters);
        $this->setExpectedException($exception);
        $document->setGenerated($this->node);
    }

    /**
     * @return array
     */
    public function provideExceptionSetGenerated()
    {
        $parameters0 = array();

        $parameters1 = array('generatedField' => 'fakeproperty');

        return array(
            array($parameters0, 'OpenOrchestra\ModelInterface\Exceptions\PropertyNotFoundException'),
            array($parameters1, 'OpenOrchestra\ModelInterface\Exceptions\MethodNotFoundException'),
        );
    }

    /**
     * @param array $parameters
     *
     * @dataProvider provideServiceNameAndTestMethod
     */
    public function testGetMethod($parameters)
    {
        $document = new Document($parameters);

        $this->assertSame($parameters['serviceName'], $document->getServiceName());
        $this->assertSame($parameters['testMethod'], $document->getTestMethod());
    }

    /**
     * @return array
     */
    public function provideServiceNameAndTestMethod()
    {
        return array(
            array(array('serviceName' => 'foo', 'testMethod' => 'bar')),
            array(array('serviceName' => 'bar', 'testMethod' => 'foo')),
        );
    }
}
