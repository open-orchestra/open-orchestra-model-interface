<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\SiteInterface;
use Symfony\Component\EventDispatcher\Event;
use Doctrine\Common\Collections\Collection;

/**
 * Class SiteEvent
 */
class SiteEvent extends Event
{
    protected $site;
    protected $oldAliases;

    /**
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site, Collection $oldAliases)
    {
        $this->site = $site;
        $this->oldAliases = $oldAliases;
    }

    /**
     * @return SiteInterface
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @return Collection
     */
    public function getOldAliases()
    {
        return $this->oldAliases;
    }
}
