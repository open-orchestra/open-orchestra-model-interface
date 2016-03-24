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
    protected $rootNodeTemplateId;

    /**
     * @param SiteInterface   $site
     * @param Collection|null $oldAliases
     * @param string|null     $rootNodeTemplateId
     *
     * @param SiteInterface $site
     */
    public function __construct(SiteInterface $site, $oldAliases = null, $rootNodeTemplateId = null)
    {
        $this->site = $site;
        $this->oldAliases = $oldAliases;
        $this->rootNodeTemplateId = $rootNodeTemplateId;
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
     * @return string
     */
    public function getRootNodeTemplateId()
    {
        return $this->rootNodeTemplateId;
    }
}
