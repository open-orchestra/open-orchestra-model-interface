<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface CacheableInterface
 */
interface CacheableInterface
{
    /**
     * @param int $maxAge
     */
    public function setMaxAge($maxAge);

    /**
     * @return int $maxAge
     */
    public function getMaxAge();
}
