<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteInterface
 */
interface SiteInterface extends ReadSiteInterface, SitemapableInterface
{
    /**
     * @param SiteAliasInterface $alias
     */
    public function addAlias(SiteAliasInterface $alias);

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
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return boolean $deleted
     *
     * @deprecated use isDeleted instead, will be removed in 0.2.8
     */
    public function getDeleted();

    /**
     * Get deleted
     *
     * @return boolean $deleted
     */
    public function isDeleted();

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Set theme
     *
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme);

    /**
     * Set robotsTxt
     *
     * @param string $robotsTxt
     */
    public function setRobotsTxt($robotsTxt);
}
