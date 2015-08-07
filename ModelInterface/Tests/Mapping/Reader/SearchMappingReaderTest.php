<?php

namespace OpenOrchestra\ModelInterface\Tests\Mapping\Reader;

use Doctrine\Common\Annotations\AnnotationReader;
use OpenOrchestra\ModelInterface\Mapping\Reader\SearchMappingReader;
use Phake;

/**
 * Class SearchMappingReaderTest
 */
class SearchMappingReaderTest extends \PHPUnit_Framework_TestCase
{
    protected $readerSearch;
    protected $fakeClass;

    /**
     * setUp
     */
    public function setUp()
    {
        $this->fakeClass = Phake::mock('OpenOrchestra\ModelInterface\Tests\Mapping\FakeClass\FakeClassAnnotation');
        $reader = new AnnotationReader();
        $this->readerSearch = new SearchMappingReader($reader);
    }

    /**
     * Test ExtractMapping
     */
    public function testExtractMapping()
    {
        $mappingProperties = array(
            "fake_property1" =>array(
                "key" => "fake_property1",
                "field" => "fakeProperty1",
                "type" => "fakeType",
            ),
            "fake_property2" =>array(
                "key" => "fake_property2",
                "field" => "fakeProperty2",
                "type" => "string",
            ),
            "fake_property_multi" =>array(
                "key" => "fake_property_multi",
                "field" => "fakePropery.embeded",
                "type" => "string",
            )
        );

        $mapping = $this->readerSearch->extractMapping($this->fakeClass);
        $this->assertCount(3, $mapping);
        foreach($mapping as $property => $searchAnnotation) {
            $this->assertInstanceOf('OpenOrchestra\ModelInterface\Mapping\Annotations\Search', $searchAnnotation);
            foreach($mappingProperties[$property] as $key => $value ) {
                $this->assertSame($value, $searchAnnotation->{'get'.$key}());
            }
        }
    }
}
