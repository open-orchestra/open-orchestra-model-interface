<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteInterface
 */
interface SiteInterface extends ReadSiteInterface, SitemapableInterface, SoftDeleteableInterface
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
