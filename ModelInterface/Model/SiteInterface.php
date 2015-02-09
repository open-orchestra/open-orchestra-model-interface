<?php

namespace PHPOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use PHPOrchestra\ModelInterface\Model\ThemeInterface;

/**
 * Interface SiteInterface
 */
interface SiteInterface extends MetaableInterface, SitemapableInterface
{
    const ROBOTS_TXT_DEFAULT = "User-agent: *\nAllow: /";

    /**
     * @return string
     */
    public function getId();

    /**
     * @param SiteAliasInterface $alias
     */
    public function addAlias(SiteAliasInterface $alias);

    /**
     * @return Collection
     */
    public function getAliases();

    /**
     * @param string $block
     */
    public function addBlock($block);

    /**
     * @param string $block
     */
    public function removeBlock($block);

    /**
     * @return array
     */
    public function getBlocks();

    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return boolean $deleted
     */
    public function getDeleted();

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName();

    /**
     * Set theme
     *
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme);

    /**
     * Get theme
     *
     * @return ThemeInterface $theme
     */
    public function getTheme();

    /**
     * Set robotsTxt
     *
     * @param string $robotsTxt
     */
    public function setRobotsTxt($robotsTxt);

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
