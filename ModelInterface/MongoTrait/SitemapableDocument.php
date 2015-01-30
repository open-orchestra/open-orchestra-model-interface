<?php

namespace PHPOrchestra\ModelInterface\MongoTrait;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use PHPOrchestra\ModelInterface\Model\SitemapableInterface;

/**
 * Trait SitemapableDocument
 */
trait SitemapableDocument
{
    /**
     * @var string $sitemapChangefreq
     *
     * @ODM\Field(type="string")
     */
    protected $sitemapChangefreq = SitemapableInterface::CHANGE_FREQ_DEFAULT;

    /**
     * @var string $sitemapPriority
     *
     * @ODM\Field(type="string")
     */
    protected $sitemapPriority = SitemapableInterface::PRIORITY_DEFAULT;

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
