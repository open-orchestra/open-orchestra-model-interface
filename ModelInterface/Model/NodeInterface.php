<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface NodeInterface
 */
interface NodeInterface extends ReadNodeInterface, StatusableInterface, BlameableInterface, MetaableInterface, SitemapableInterface, SchemeableInterface, SoftDeleteableInterface, HistorisableInterface
{
    const ENTITY_TYPE = 'node';
    const TYPE_DEFAULT = 'page';
    const ROOT_NODE_ID = 'root';
    const ROOT_PARENT_ID = '-';
    const MAX_AGE = 1000;
    const THEME_DEFAULT = 'use_default_theme';
    const GROUP_ROLE_TYPE = 'node';
    const DELETED_ORDER = -1;
    const TRASH_ITEM_TYPE = 'node';

    /**
     * Set nodeId
     *
     * @param string $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * Set nodeType
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType);

    /**
     * Set siteId
     *
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * Set parentId
     *
     * @param string $parentId
     */
    public function setParentId($parentId);

    /**
     * Set path
     *
     * @param string $path
     */
    public function setPath($path);

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getBoLabel();

    /**
     * @param string $boLabel
     */
    public function setBoLabel($boLabel);

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * Set template
     *
     * @param string $template
     */
    public function setTemplate($template);

    /**
     * Set theme
     *
     * @param string $theme
     */
    public function setTheme($theme);

    /**
     * Set default theme site
     *
     * @param boolean $themeSiteDefault
     */
    public function setDefaultSiteTheme($themeSiteDefault);

    /**
     * @param boolean $inFooter
     */
    public function setInFooter($inFooter);

    /**
     * @param boolean $inMenu
     */
    public function setInMenu($inMenu);

    /**
     * @param string $role
     */
    public function setRole($role);

    /**
     * @param int $order
     */
    public function setOrder($order);

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription);

    /**
     * @param \DateTime|null $date
     */
    public function setPublishDate($date);

    /**
     * @param \DateTime|null $date
     */
    public function setUnpublishDate($date);

    /**
     * @param string        $areaId
     * @param AreaInterface $area
     */
    public function setArea($areaId, AreaInterface $area);
}
