<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadNodeInterface
 */
interface ReadNodeInterface extends TimestampableInterface, ReadSitemapableInterface, ReadSchemeableInterface, CacheableInterface
{
    const TYPE_ERROR = 'error';
    const ERROR_404_NODE_ID = 'errorPage404';
    const ERROR_503_NODE_ID = 'errorPage503';

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId();

    /**
     * Get nodeId
     *
     * @return string $nodeId
     */
    public function getNodeId();

    /**
     * Get siteId
     *
     * @return string $siteId
     */
    public function getSiteId();

    /**
     * Get parentId
     *
     * @return string $parentId
     */
    public function getParentId();

    /**
     * @return string
     */
    public function getRoutePattern();

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName();

    /**
     * Get boLabel
     *
     * @return string
     */
    public function getBoLabel();

    /**
     * Get language
     *
     * @return string $language
     */
    public function getLanguage();

    /**
     * Get theme
     *
     * @return string $theme
     */
    public function getTheme();

    /**
     * @param int $key
     *
     * @return BlockInterface
     */
    public function getBlock($key);

    /**
     * @return string
     */
    public function getRole();

    /**
     * @return int
     */
    public function getOrder();

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @param AreaInterface $area
     */
    public function setRootArea(AreaInterface $area);

    /**
     * @return AreaInterface
     */
    public function getRootArea();
}
