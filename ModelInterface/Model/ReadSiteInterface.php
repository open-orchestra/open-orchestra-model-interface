<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface ReadSiteInterface
 */
interface ReadSiteInterface extends ReadSitemapableInterface
{
    const ROBOTS_TXT_DEFAULT = "User-agent: *\nAllow: /";
    const CHANGE_FREQ_DEFAULT = 'never';
    const PRIORITY_DEFAULT = '0.5';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return Collection
     */
    public function getAliases();

    /**
     * @return ReadSiteAliasInterface
     */
    public function getMainAlias();

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName();

    /**
     * Get metaAuthor
     *
     * @return string $metaAuthor
     */
    public function getMetaAuthor();

    /**
     * Get robotsTxt
     *
     * @return string $robotsTxt
     */
    public function getRobotsTxt();

    /**
     * Get all languages of the site
     *
     * @return array
     */
    public function getLanguages();

    /**
     * Return one of the default site language
     *
     * @return string
     */
    public function getDefaultLanguage();

    /**
     * return main alias index in the collection
     *
     * @return int
     */
    public function getMainAliasId();

    /**
     * Return alias id for given language
     *
     * @param string $language
     *
     * @return int
     */
    public function getAliasIdForLanguage($language);

    /**
     * Get templateSet
     *
     * @return string $templateSet
     */
    public function getTemplateSet();
}
