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
    public function isSiteLinked();

    /**
     * @param boolean $siteLinked
     */
    public function setSiteLinked($siteLinked);
}
