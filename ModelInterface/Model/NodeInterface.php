<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface NodeInterface
 */
interface NodeInterface extends ReadNodeInterface, StatusableInterface, BlameableInterface, MetaableInterface, SitemapableInterface, SchemeableInterface, SoftDeleteableInterface, HistorisableInterface, AutoPublishableInterface, UseTrackableInterface
{
    const ENTITY_TYPE = 'node';
    const TYPE_DEFAULT = 'page';
    const ROOT_NODE_ID = 'root';
    const ROOT_PARENT_ID = '-';
    const MAX_AGE = 1000;
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
     * Get path
     *
     * @return string $path
     */
    public function getPath();

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
     * @param boolean $inFooter
     */
    public function setInFooter($inFooter);

    /**
     * @param boolean $inMenu
     */
    public function setInMenu($inMenu);

    /**
     * @param int $order
     */
    public function setOrder($order);

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription);

    /**
     * @param string $specialPageName
     */
    public function setSpecialPageName($specialPageName);

    /**
     * @param string        $areaId
     * @param AreaInterface $area
     */
    public function setArea($areaId, AreaInterface $area);

    /**
     * @param string $canonicalPage
     */
    public function setCanonicalPage($canonicalPage);

    /**
     * @param string $seoTitle
     */
    public function setSeoTitle($seoTitle);

    /**
     * @param array $frontRoles
     */
    public function setFrontRoles(array $frontRoles);
}
