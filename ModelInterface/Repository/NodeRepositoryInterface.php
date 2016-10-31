<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\AreaInterface;
use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\UseTrackableTraitInterface;

/**
 * Interface NodeRepositoryInterface
 */
interface NodeRepositoryInterface extends ReadNodeRepositoryInterface, StatusableElementRepositoryInterface, StatusableRepositoryInterface, UseTrackableTraitInterface
{
    /**
     * @param NodeInterface $node
     * @param string        $areaId
     *
     * @return null|AreaInterface
     */
    public function findAreaInNodeByAreaId(NodeInterface $node, $areaId);

    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $entityId
     *
     * @return NodeInterface
     */
    public function findVersionByDocumentId($entityId);

    /**
     * @param string $nodeId
     *
     * @return NodeInterface
     */
    public function findOneByNodeId($nodeId);

    /**
     * @param string $parentId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByParent($parentId, $siteId);

    /**
     * @param string $parentId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findOneByParentWithGreatestOrder($parentId, $siteId);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @throws \Exception
     *
     * @return array
     */
    public function findByIncludedPathSiteIdAndLanguage($path, $siteId, $language);

    /**
     * @param string $path
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByIncludedPathAndSiteId($path, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     */
    public function findInLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeAndLanguageAndSite($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findPublishedSortedByVersion($nodeId, $language, $siteId);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findLastVersionByType($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findLastVersionByTypeCurrentlyPublished($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @return array
     */
    public function findByPathCurrentlyPublishedAndLanguage($path, $siteId, $language);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @return mixed
     */
    public function findSubTreeByPath($path, $siteId, $language);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeAndSite($nodeId, $siteId);

    /**
     * @param string $referenceNodeId
     * @param string $nodeId
     * @param string $siteId
     * @param string $entityType
     *
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function updateUseReference($referenceNodeId, $nodeId, $siteId, $entityType);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     *
     * @return mixed
     */
    public function findOneByNodeAndSite($nodeId, $siteId);

    /**
     * @param string $type
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return array
     */
    public function findByNodeTypeAndSite($type, $siteId);

    /**
     * @param string $nodeId
     * @param string $type
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return array
     */
    public function findByNodeIdAndNodeTypeAndSite($nodeId, $type, $siteId);

    /**
     *
     * @param string $parentId
     * @param string $routePattern
     * @param string $nodeId
     * @param string $siteId
     *
     * @return array
     */
    public function findByParentAndRoutePattern($parentId, $routePattern, $nodeId, $siteId);

    /**
     * @param string $parentId
     * @param int    $order
     * @param string $nodeId
     * @param string $siteId
     *
     * @return bool
     */
    public function hasOtherNodeWithSameParentAndOrder($parentId, $order, $nodeId, $siteId);

    /**
     * @param string   $nodeId
     * @param string   $language
     * @param string   $siteId
     * @param int|null $version
     *
     * @return mixed
     */
    public function findVersion($nodeId, $language, $siteId, $version = null);

    /**
     * @param string       $id
     * @param string       $siteId
     * @param array|null   $eventTypes
     * @param boolean|null $published
     * @param int|null     $limit
     * @param array|null   $sort
     *
     * @return array
     */
    public function findByHistoryAndSiteId($id, $siteId, array $eventTypes = null, $published = null, $limit = null, array $sort = null);

    /**
     * @param string $siteId
     * @param bool   $themeSiteDefault
     *
     * @return array
     */
    public function findBySiteIdAndDefaultTheme($siteId, $themeSiteDefault = true);

    /**
     * @param string $theme
     *
     * @return array
     */
    public function findByTheme($theme);

    /**
     * Find all nodes (in all versions and all langauges) ready to be auto-published
     *
     * @param string $siteId
     * @param array  $fromStatus
     *
     * @return array
     */
    public function findNodeToAutoPublish($siteId, array $fromStatus);

    /**
     * Find all nodes (in all versions and all langauges) ready to be auto-unpublished
     *
     * @param string          $siteId
     * @param StatusInterface $publishedStatus
     *
     * @return array
     */
    public function findNodeToAutoUnpublish($siteId, StatusInterface $publishedStatus);

    /**
     * indicates if node collection contains an usage of a particular block
     *
     * @param string $blockId
     *
     * @return boolean
     */
    public function isBlockUsed($blockId);
}
