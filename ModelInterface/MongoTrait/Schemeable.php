<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Trait Schemeable
 */
trait Schemeable
{
    /**
     * @var string $scheme
     *
     * @ODM\Field(type="string")
     */
    protected $scheme;

    /**
     * @param string $scheme
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }
}
