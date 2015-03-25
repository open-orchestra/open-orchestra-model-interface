<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use OpenOrchestra\ModelInterface\Model\ThemeInterface;

/**
 * Interface ReadSiteInterface
 */
interface ReadSiteInterface extends MetaableInterface, ReadSitemapableInterface
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
     * @return SiteAliasInterface
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
     * Get theme
     *
     * @return ThemeInterface $theme
     */
    public function getTheme();

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
     * Return one of the defailt site language
     *
     * @return string
     */
    public function getDefaultLanguage();
}
