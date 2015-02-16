<?php

namespace PHPOrchestra\ModelInterface\Model;

/**
 * Interface SiteAliasInterface
 */
interface SiteAliasInterface extends SchemeAbilityInterface
{
    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @param string $domain
     */
    public function setDomain($domain);

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @param string $prefix
     */
    public function setPrefix($prefix);

    /**
     * @return string
     */
    public function getPrefix();

    /**
     * @return boolean
     */
    public function isMain();

    /**
     * @param bool $main
     */
    public function setMain($main);
}
