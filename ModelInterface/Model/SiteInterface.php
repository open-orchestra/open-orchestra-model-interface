<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SiteInterface
 */
interface SiteInterface extends ReadSiteInterface, SitemapableInterface, SoftDeleteableInterface
{
    const PREFIX_SITE_ALIAS = 'site-alias-';
    const ENTITY_TYPE       = 'site';

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
     * @param array $contentTypes
     */
    public function setContentTypes($contentTypes);

    /**
     * @return array
     */
    public function getContentTypes();

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
     * Set templateSet
     *
     * @param string $templateSet
     */
    public function setTemplateSet($templateSet);

    /**
     * Get templateNodeRoot
     *
     * @return string $templateNodeRoot
     */
    public function getTemplateNodeRoot();

    /**
     * Set templateNodeRoot
     *
     * @param string $templateNodeRoot
     */
    public function setTemplateNodeRoot($templateNodeRoot);

    /**
     * Set metaAuthor
     *
     * @param string $metaAuthor
     */
    public function setMetaAuthor($metaAuthor);

    /**
     * Set robotsTxt
     *
     * @param string $robotsTxt
     */
    public function setRobotsTxt($robotsTxt);
}
