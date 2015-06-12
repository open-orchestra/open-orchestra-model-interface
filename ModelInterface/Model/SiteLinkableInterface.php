<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteLinkableInterface
 */
interface SiteLinkableInterface
{
    /**
     * @return boolean
     */
    public function isLinkedToSite();

    /**
     * @param boolean $linkedToSite
     */
    public function setLinkedToSite($linkedToSite);
}
