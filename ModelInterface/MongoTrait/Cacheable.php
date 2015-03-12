<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Class Cacheable
 */
trait Cacheable
{
    /**
     * @var int $id
     *
     * @ODM\Field(type="int")
     */
    protected $maxAge;

    /**
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * @param int $maxAge
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
    }
}
