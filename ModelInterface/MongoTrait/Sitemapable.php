<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Trait Sitemapable
 */
trait Sitemapable
{
    /**
     * @var string $sitemapChangefreq
     *
     * @ODM\Field(type="string")
     */
    protected $sitemapChangefreq;

    /**
     * @var string $sitemapPriority
     *
     * @ODM\Field(type="string")
     */
    protected $sitemapPriority;

    /**
     * Set sitemapChangefreq
     *
     * @param string $sitemapChangefreq
     */
    public function setSitemapChangefreq($sitemapChangefreq)
    {
        $this->sitemapChangefreq = $sitemapChangefreq;
    }

    /**
     * Get sitemapChangefreq
     *
     * @return string $sitemapChangefreq
     */
    public function getSitemapChangefreq()
    {
        return $this->sitemapChangefreq;
    }

    /**
     * Set sitemapPriority
     *
     * @param string $sitemapPriority
     */
    public function setSitemapPriority($sitemapPriority)
    {
        $this->sitemapPriority = $sitemapPriority;
    }

    /**
     * Get sitemapPriority
     *
     * @return string $sitemapPriority
     */
    public function getSitemapPriority()
    {
        return $this->sitemapPriority;
    }
}
