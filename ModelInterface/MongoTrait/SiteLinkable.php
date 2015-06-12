<?php

namespace OpenOrchestra\ModelInterface\MongoTrait;

/**
 * Trait SiteLinkable
 */
trait SiteLinkable
{
    /**
     * @ODM\Field(type="boolean")
     */
    protected $linkedToSite = false;

    /**
     * @return boolean
     */
    public function isLinkedToSite()
    {
        return $this->linkedToSite;
    }

    /**
     * @param boolean $linkedToSite
     */
    public function setLinkedToSite($linkedToSite)
    {
        $this->linkedToSite = $linkedToSite;
    }
}
