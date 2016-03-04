<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\ReadNodeInterface;

/**
 * Interface ReadNodeRepositoryInterface
 */
interface ReadNodeRepositoryInterface
{
    /**
     * @param string $id
     *
     * @return ReadNodeInterface
     */
    public function find($id);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 1.2.0, use findPublishedInLastVersion instead
     *
     * @return mixed
     */
    public function findOnePublishedByNodeIdAndLanguageAndSiteIdInLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @deprecated With the currently published flag, use findCurrentlyPublished instead, will be remoted in 1.2.0
     *
     * @return mixed
     */
    public function findPublishedInLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return NodeInterface
     */
    public function findOneCurrentlyPublished($nodeId, $language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 1.2.0, use findLastPublishedVersion instead
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedVersionByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated with the fag usage, use findCurrentlyPublishedVersion, will be removed in 1.2
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedVersion($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return ReadNodeInterface
     */
    public function findCurrentlyPublishedVersion($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 1.2.0, use getFooterTree instead
     *
     * @return array
     */
    public function getFooterTreeByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getFooterTree($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 1.2.0, use getMenuTree instead
     *
     * @return array
     */
    public function getMenuTreeByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getMenuTree($language, $siteId);

    /**
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 1.2.0, use getSubMenu instead
     *
     * @return array
     */
    public function getSubMenuByNodeIdAndNbLevelAndLanguageAndSiteId($nodeId, $nbLevel, $language, $siteId);

    /**
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getSubMenu($nodeId, $nbLevel, $language, $siteId);

    /**
     * @return ReadNodeInterface
     */
    public function findLastPublished();

    /**
     * @param string $nodeType
     * @param string $siteId
     * 
     * @return array
     */
    public function findAllNodesOfTypeInLastPublishedVersionForSite($nodeType, $siteId);

}
