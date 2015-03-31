<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface ReadSitemapableInterface
 */
interface ReadSitemapableInterface
{
    /**
     * Get sitemapChangefreq
     *
     * @return string $sitemapChangefreq
     */
    public function getSitemapChangefreq();

    /**
     * Get sitemapPriority
     *
     * @return string $sitemapPriority
     */
    public function getSitemapPriority();
}
