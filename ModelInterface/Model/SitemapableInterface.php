<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface SitemapableInterface
 */
interface SitemapableInterface extends ReadSitemapableInterface
{
    /**
     * Set sitemapChangefreq
     *
     * @param string $sitemapChangefreq
     */
    public function setSitemapChangefreq($sitemapChangefreq);

    /**
     * Set sitemapPriority
     *
     * @param string $sitemapPriority
     */
    public function setSitemapPriority($sitemapPriority);
}
