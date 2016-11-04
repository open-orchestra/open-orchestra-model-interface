<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteAliasInterface
 */
interface SiteAliasInterface extends ReadSiteAliasInterface, MetaableInterface, SchemeableInterface
{
    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @param string $domain
     */
    public function setDomain($domain);

    /**
     * @param string $prefix
     */
    public function setPrefix($prefix);

    /**
     * @param bool $main
     */
    public function setMain($main);

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription);


    /**
     * @param string $googleMarker
     */
    public function setGoogleMarker($googleMarker);

    /**
     * @param bool $cnilCompliance
     */
    public function setCnilCompliance($cnilCompliance);

    /**
     * @param string $xtsd
     */
    public function setXtsd($xtsd);

    /**
     * @param string $xtside
     */
    public function setXtside($xtside);

    /**
     * @param string $xtn2
     */
    public function setXtn2($xtn2);
}
