<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\SiteInterface;
use Symfony\Component\EventDispatcher\Event;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class SiteEvent
 */
class SiteEvent extends Event
{
    protected $site;
    protected $oldAliases;
    protected $rootNodeTemplate;

    /**
     * @param SiteInterface   $site
     * @param Collection|null $oldAliases
     *
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site, $oldAliases = null)
    {
        $this->site = $site;
        $this->oldAliases = $oldAliases;
        if (is_null($oldAliases)) {
            $this->oldAliases = new ArrayCollection();
        }
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
