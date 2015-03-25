<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

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
