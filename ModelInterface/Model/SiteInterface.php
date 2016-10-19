<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteInterface
 */
interface SiteInterface extends ReadSiteInterface, SitemapableInterface, SoftDeleteableInterface
{
    const PREFIX_SITE_ALIAS = 'site-alias-';

    /**
     * @param SiteAliasInterface $alias
     */
    public function addAlias(SiteAliasInterface $alias);

    /**
     * @param SiteAliasInterface $alias
     */
    public function removeAlias(SiteAliasInterface $alias);

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
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Get templateSet
     *
     * @return string $templateSet
     */
    public function getTemplateSet();

    /**
     * Set templateSet
     *
     * @param string $templateSet
     */
    public function setTemplateSet($templateSet);

    /**
     * Get templateRoot
     *
     * @return string $templateRoot
     */
    public function getTemplateRoot();

    /**
     * Set templateRoot
     *
     * @param string $templateRoot
     */
    public function setTemplateRoot($templateRoot);

    /**
     * Set theme
     *
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme);

    /**
     * @param array $metaKeywords
     */
    public function setMetaKeywords(array $metaKeywords);

    /**
     * @param string $language
     * @param string $metaKeywords
     */
    public function addMetaKeywords($language, $metaKeywords);

    /**
     * @param string $language
     */
    public function removeMetaKeywords($language);

    /**
     * @param array $metaDescriptions
     */
    public function setMetaDescriptions(array $metaDescriptions);

    /**
     * @param string $language
     * @param string $metaDescription
     */
    public function addMetaDescription($language, $metaDescription);

    /**
     * @param string $language
     */
    public function removeMetaDescription($language);

    /**
     * Set robotsTxt
     *
     * @param string $robotsTxt
     */
    public function setRobotsTxt($robotsTxt);
}
