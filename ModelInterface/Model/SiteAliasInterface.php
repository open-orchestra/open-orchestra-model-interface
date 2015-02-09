<?php

namespace PHPOrchestra\ModelInterface\Model;

/**
 * Interface SiteAliasInterface
 */
interface SiteAliasInterface
{
    /**
     * @param string $defaultLanguage
     */
    public function setDefaultLanguage($defaultLanguage);

    /**
     * @return string
     */
    public function getDefaultLanguage();

    /**
     * @param string $domain
     */
    public function setDomain($domain);

    /**
     * @return string
     */
    public function getDomain();

    /**
     * @param array $languages
     */
    public function setLanguages($languages);

    /**
     * @return array
     */
    public function getLanguages();
}
