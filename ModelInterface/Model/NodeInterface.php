<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface NodeInterface
 */
interface NodeInterface extends ReadNodeInterface, BlockContainerInterface, StatusableInterface, BlameableInterface, MetaableInterface, SitemapableInterface, SchemeableInterface, VersionableInterface
{
    /**
     * @deprecated use TYPE_TRANSVERSE instead, will be removed in 0.2.5
     */
    const TYPE_GENERAL = 'general';
    const TYPE_TRANSVERSE = 'general';
    const TYPE_DEFAULT = 'page';
    const ROOT_NODE_ID = 'root';
    const TRANSVERSE_NODE_ID = 'transverse';
    const MAX_AGE = 1000;

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
     * @deprecated
     */
    public function setPath($path);

    /**
     * Get path
     *
     * @return string $path
     *
     * @deprecated
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
     * Set areas
     *
     * @param Collection $areas
     */
    public function setAreas(Collection $areas);

    /**
     * @param boolean $inFooter
     */
    public function setInFooter($inFooter);

    /**
     * @return boolean
     *
     * @deprecated use isInFooter
     */
    public function getInFooter();

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
     *
     * @deprecated use isInMenu
     */
    public function getInMenu();

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
}
