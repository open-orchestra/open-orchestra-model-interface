<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadSiteAliasInterface
 */
interface ReadSiteAliasInterface extends ReadSchemeableInterface
{
    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @return string
     */
    public function getPrefix();

    /**
     * @return boolean
     */
    public function isMain();

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @return string
     */
    public function getGoogleMarker();

    /**
     * @return bool
     */
    public function isCnilCompliance();

    /**
     * @return string
     */
    public function getXtsd();

    /**
     * @return string
     */
    public function getXtside();

    /**
     * @return string
     */
    public function getXtn2();
}
