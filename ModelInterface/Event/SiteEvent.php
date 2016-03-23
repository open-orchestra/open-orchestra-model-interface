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
    protected $templateIdNodeHome;

    /**
     * @param SiteInterface   $site
     * @param Collection|null $oldAliases
     * @param string|null     $templateIdNodeHome
     *
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site, $oldAliases = null, $templateIdNodeHome = null)
    {
        $this->site = $site;
        $this->oldAliases = $oldAliases;
        $this->templateIdNodeHome = $templateIdNodeHome;
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

    /**
     * @return Collection
     */
    public function getTemplateIdNodeHome()
    {
        return $this->templateIdNodeHome;
    }
}
