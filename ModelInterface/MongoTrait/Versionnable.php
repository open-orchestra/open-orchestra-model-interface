<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;


/**
 * Trait Versionnable
 */
trait Versionnable
{
    /**
     * @var int $version
     *
     * @ODM\Field(type="int")
     */
    protected $version = 1;

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }
}
