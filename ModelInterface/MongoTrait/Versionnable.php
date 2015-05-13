<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Trait Versionnable
 *
 * @deprecated Use Versionable instead, will be removed in 0.2.3
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
