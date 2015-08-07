<?php

namespace OpenOrchestra\ModelInterface\Tests\Mapping\Annotations;

use OpenOrchestra\ModelInterface\Mapping\Annotations\Search;

/**
 * Class SearchTest
 */
class SearchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param array $data
     * @dataProvider providerData
     */
    public function testSet($data)
    {
        $search = new Search($data);
        foreach ($data as $key => $value) {
            $this->assertSame($value, $search->{"get".$key}());
            if (!isset($data['type'])) {
                $this->assertSame($search->getType(), 'string');
            }
        }
    }

    /**
     * @return array
     */
    public function providerData()
    {
        return array(
            array(array("field" => "name", "key" => "name", "type" => "string")),
            array(array("field" => "fakeField", "key" => "fake_key")),
        );
    }
}
