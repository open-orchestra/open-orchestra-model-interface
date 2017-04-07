<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\AreaInterface;
use OpenOrchestra\ModelInterface\Model\NodeInterface;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\AutoPublishableTraitInterface;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\UseTrackableTraitInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface NodeRepositoryInterface
 */
interface NodeRepositoryInterface extends ReadNodeRepositoryInterface, StatusableContainerRepositoryInterface, StatusableRepositoryInterface, AutoPublishableTraitInterface, UseTrackableTraitInterface
{
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
     * @param string $parentId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByParent($parentId, $siteId);

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
    public function findNotDeletedSortByUpdatedAt($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function countNotDeletedVersions($nodeId, $language, $siteId);

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
     * @param string $language
     *
     * @return array
     */
    public function findLastVersionByLanguage($siteId, $language);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findPublishedByType($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @return array
     */
    public function findPublishedByPathAndLanguage($path, $siteId, $language);

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
     * @param string $nodeId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findOneByNodeAndSite($nodeId, $siteId);

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
     * @param string $parentId
     * @param int    $order
     * @param string $siteId
     *
     * @return bool
     */
    public function hasNodeWithSameParentAndOrder($parentId, $order, $siteId);

    /**
     * @param string   $nodeId
     * @param string   $language
     * @param string   $siteId
     * @param int      $version
     *
     * @return mixed
     */
    public function findVersionNotDeleted($nodeId, $language, $siteId, $version);

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
     * @param string $blockId
     *
     * @return boolean
     */
    public function countBlockUsed($blockId);

    /**
     * @param string $siteId
     * @param string $language
     * @param string $parentId
     *
     * @return array
     */
    public function findTreeNode($siteId, $language, $parentId);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $siteId
     * @param string                      $language
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration, $siteId, $language);

    /**
     * @param string  $siteId
     * @param string  $language
     *
     * @return int
     */
    public function count($siteId, $language);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $siteId
     * @param string                      $language
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration, $siteId, $language);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $siteId
     * @param string                      $language
     * @param string                      $blockId
     *
     * @return array
     */
    public function findWithBlockUsedForPaginate(PaginateFinderConfiguration $configuration, $siteId, $language, $blockId);

    /**
     * @param string  $siteId
     * @param string  $language
     * @param string  $blockId
     *
     * @return int
     */
    public function countWithBlockUsed($siteId, $language, $blockId);

    /**
     * @param string $siteId
     * @param string $nodeId
     * @param int    $order
     * @param string $parentId
     *
     * @throws \Exception
     */
    public function updateOrderOfBrothers($siteId, $nodeId, $order, $parentId);

    /**
     * @param string  $blockId
     * @param string  $areaName
     * @param string  $nodeId
     * @param string  $siteId
     * @param string  $language
     * @param integer $version
     *
     * @throws \Exception
     */
    public function removeBlockInArea($blockId, $areaName, $nodeId, $siteId, $language, $version);

    /**
     * @param array $nodeIds
     *
     * @throws \Exception
     */
    public function removeNodeVersions(array $nodeIds);

    /**
     * @param string $nodeId
     * @param string $siteId
     * @param string $areaId
     *
     * @return array
     */
    public function findByNodeIdAndSiteIdWithBlocksInArea($nodeId, $siteId, $areaId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function findAllSpecialPage($language, $siteId);

    /**
     * @param string $nodeId
     * @param string $siteId
     * @param string $language
     * @param string $name
     *
     * @return int
     */
    public function countOtherNodeWithSameSpecialPageName($nodeId, $siteId, $language, $name);

    /**
     * @param string $referenceNodeId
     * @param string $nodeId
     * @param string $siteId
     * @param string $entityType
     *
     * @throws \Exception
     */
    public function updateUseReference($referenceNodeId, $nodeId, $siteId, $entityType);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @throws \Exception
     */
    public function softDeleteNode($nodeId, $siteId);

    /**
     * @param string $nodeId
     * @param string $siteId
     * @param string $parentId
     * @param string $path
     *
     * @throws \Exception
     */
    public function restoreDeletedNode($nodeId, $siteId, $parentId = null , $path = null);

    /**
     * @param string $parentId
     * @param string $siteId
     *
     * @return int
     */
    public function countByParentId($parentId, $siteId);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @return int
     */
    public function hasNodeIdWithoutAutoUnpublishToState($nodeId, $siteId);
}
