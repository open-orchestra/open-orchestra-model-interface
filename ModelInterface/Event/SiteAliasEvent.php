<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\SiteInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class SiteAliasEvent
 */
class SiteAliasEvent extends Event
{
    protected $siteId;

    /**
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site)
    {
        $this->siteId = $site->getSiteId();
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->site;
    }
}
