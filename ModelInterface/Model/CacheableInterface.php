<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface CacheableInterface
 */
interface CacheableInterface
{
    const CACHE_PRIVATE = 'private';
    const CACHE_PUBLIC = 'public';

    /**
     * @param string $status
     */
    public function setCacheStatus($status);

    /**
     * @return string $status
     */
    public function getCacheStatus();

    /**
     * @param int $maxAge
     */
    public function setMaxAge($maxAge);

    /**
     * @return int $maxAge
     */
    public function getMaxAge();
}
