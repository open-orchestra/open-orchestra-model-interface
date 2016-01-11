<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface NodeInterface
 */
interface NodeInterface extends ReadNodeInterface, BlockContainerInterface, StatusableInterface, BlameableInterface, MetaableInterface, SitemapableInterface, SchemeableInterface, SoftDeleteableInterface
{
    const TYPE_DEFAULT = 'page';
    const TYPE_TRANSVERSE = 'general';
    const ROOT_NODE_ID = 'root';
    const ROOT_PARENT_ID = '-';
    const TRANSVERSE_NODE_ID = 'transverse';
    const MAX_AGE = 1000;
    const THEME_DEFAULT = 'use_default_theme';
    const GROUP_ROLE_TYPE = 'node';
    const DELETED_ORDER = -1;

    /**
     * Set nodeId
     *
     * @param int $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * Set nodeType
     *
     * @param string $nodeType
     */
    public function setNodeType($nodeType);

    /**
     * Get nodeType
     *
     * @return string $nodeType
     */
    public function getNodeType();

    /**
     * Set siteId
     *
     * @param String $siteId
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
     *
     */
    public function setPath($path);

    /**
     * Get path
     *
     * @return string $path
     *
     */
    public function getPath();

    /**
     * @param string $routePattern
     */
    public function setRoutePattern($routePattern);

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
     * Set templateId
     *
     * @param string $templateId
     */
    public function setTemplateId($templateId);

    /**
     * Get templateId
     *
     * @return string $templateId
     */
    public function getTemplateId();

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
     * Has default site theme
     *
     * @return boolean $themeSiteDefault
     */
    public function hasDefaultSiteTheme();

    /**
     * @param BlockInterface $block
     *
     * @return bool|int|mixed|string
     */
    public function getBlockIndex(BlockInterface $block);

    /**
     * @param int            $key
     * @param BlockInterface $block
     */
    public function setBlock($key, BlockInterface $block);

    /**
     * Set blocks
     *
     * @param Collection $blocks
     */
    public function setBlocks(Collection $blocks);

    /**
     * @param boolean $inFooter
     */
    public function setInFooter($inFooter);

    /**
     * @return boolean
     */
    public function isInFooter();

    /**
     * @param boolean $inMenu
     */
    public function setInMenu($inMenu);

    /**
     * @return boolean
     */
    public function isInMenu();

    /**
     * @param string $role
     */
    public function setRole($role);

    /**
     * @param int $order
     */
    public function setOrder($order);

    /**
     * @return boolean
     */
    public function isEditable();

    /**
     * @param string $boDirection
     */
    public function setBoDirection($boDirection);

    /**
     * @return string
     */
    public function getBoDirection();

}
