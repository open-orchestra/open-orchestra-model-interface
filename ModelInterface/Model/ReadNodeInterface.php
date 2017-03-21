<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ReadNodeInterface
 */
interface ReadNodeInterface extends TimestampableInterface, ReadSitemapableInterface, ReadSchemeableInterface, KeywordableInterface, CacheableInterface
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
     * @return string
     */
    public function getNodeId();

    /**
     * Get nodeType
     *
     * @return string $nodeType
     */
    public function getNodeType();

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
     * Get template
     *
     * @return string $template
     */
    public function getTemplate();

    /**
     * @return boolean
     */
    public function isInFooter();

    /**
     * @return boolean
     */
    public function isInMenu();

    /**
     * @return int
     */
    public function getOrder();

    /**
     * @return string
     */
    public function getRoutePattern();

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * Get areas
     *
     * @return \Doctrine\Common\Collections\Collection $areas
     */
    public function getAreas();

    /**
     * @return string
     */
    public function getSpecialPageName();

    /**
     * Get area
     * @param string        $areaId
     *
     * @return AreaInterface $area
     */
    public function getArea($areaId);

    /**
     * @return string
     */
    public function getCanonicalPage();

    /**
     * @return string
     */
    public function getSeoTitle();

    /**
     * @return ArrayCollection
     */
    public function getFrontRoles();
}
