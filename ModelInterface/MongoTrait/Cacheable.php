<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

use OpenOrchestra\ModelInterface\Model\CacheableInterface;

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
     * @var string $string
     *
     * @ODM\Field(type="string")
     */
    protected $cacheStatus = CacheableInterface::CACHE_PRIVATE;

    /**
     * @return string
     */
    public function getCacheStatus()
    {
        return $this->cacheStatus;
    }

    /**
     * @param string $status
     */
    public function setCacheStatus($status)
    {
        $this->cacheStatus = $cacheStatus;
    }

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
