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
    protected $siteLinked = false;

    /**
     * @return boolean
     */
    public function isSiteLinked()
    {
        return $this->siteLinked;
    }

    /**
     * @param boolean $siteLinked
     */
    public function setSiteLinked($siteLinked)
    {
        $this->siteLinked = $siteLinked;
    }
}
