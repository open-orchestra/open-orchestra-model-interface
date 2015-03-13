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
     * @param int $maxAge
     */
    public function setMaxAge($maxAge);

    /**
     * @return int $maxAge
     */
    public function getMaxAge();
}
