<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\SiteInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class SiteEvent
 */
class SiteEvent extends Event
{
    protected $site;

    /**
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site)
    {
        $this->site = $site;
    }

    /**
     * @return SiteInterface
     */
    public function getSite()
    {
        return $this->site;
    }
}
