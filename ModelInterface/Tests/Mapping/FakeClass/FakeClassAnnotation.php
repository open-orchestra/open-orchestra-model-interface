<?php

namespace OpenOrchestra\ModelInterface\Tests\Mapping\FakeClass;

use OpenOrchestra\ModelInterface\Mapping\Annotations as ORCHESTRA;

/**
 * Class FakeClassAnnotation
 */
class FakeClassAnnotation
{
    /**
     * @ORCHESTRA\Search(
     *      type="fakeType",
     *      key="fake_property1",
     *      field="fakeProperty1"
     * )
     */
    protected $fakeProperty1;

    /**
     * @ORCHESTRA\Search(key="fake_property2")
     * @ORCHESTRA\Search(key="fake_property_multi", field="fakePropery.embeded")
     */
    protected $fakeProperty2;

}
