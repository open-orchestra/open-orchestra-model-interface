<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadNodeInterface
 */
interface ReadNodeInterface extends TimestampableInterface, ReadSitemapableInterface, ReadSchemeableInterface, CacheableInterface, AreaContainerInterface
{
    /**
     * Get id
     *
     * @return string $id
     */
    public function getId();

    /**
     * Get nodeId
     *
     * @return int $nodeId
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
}
