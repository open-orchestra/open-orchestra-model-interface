<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteAliasInterface
 */
interface SiteAliasInterface extends ReadSiteAliasInterface, SchemeableInterface
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
}
