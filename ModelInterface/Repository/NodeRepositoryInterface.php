<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\NodeInterface;

/**
 * Interface NodeRepositoryInterface
 */
interface NodeRepositoryInterface extends ReadNodeRepositoryInterface, StatusableElementRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $entityId
     *
     * @deprecated will be removed in 1.2.0, use findVersionByDocumentId instead
     *
     * @return NodeInterface
     */
    public function findOneById($entityId);

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
     * @deprecated will be removed in 1.2.0, use findByParent instead
     *
     * @return mixed
     */
    public function findByParentIdAndSiteId($parentId, $siteId);

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
     * @deprecated will be removed in 1.2.0, use findInLastVersion instead
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdInLastVersion($nodeId, $language, $siteId);

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
     * @deprecated will be removed in 1.2.0, use findByNodeAndLanguageAndSite instead
     *
     * @return mixed
     */
    public function findByNodeIdAndLanguageAndSiteId($nodeId, $language, $siteId);

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
     * @deprecated will be removed in 1.2.0, use findPublishedSortedByVersion instead
     *
     * @return mixed
     */
    public function findByNodeIdAndLanguageAndSiteIdAndPublishedOrderedByVersion($nodeId, $language, $siteId);

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
     * @deprecated will be removed in 1.2.0, use findLastVersionByType instead
     *
     * @return array
     */
    public function findLastVersionBySiteId($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findLastVersionByType($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @deprecated will be removed in 1.2.0, use findSubTreeByPath instead
     *
     * @return mixed
     */
    public function findChildrenByPathAndSiteIdAndLanguage($path, $siteId, $language);

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
     * @deprecated will be removed in 1.2.0, use findByNodeAndSite instead
     *
     * @return mixed
     */
    public function findByNodeIdAndSiteId($nodeId, $siteId);

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
     * @param string $type
     *
     * @throws \Exception
     *
     * @deprecated used only in the fixtures, will be removed in 1.2.0
     *
     * @return array
     */
    public function findByNodeType($type = NodeInterface::TYPE_DEFAULT);

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
     * @deprecated will be removed in 1.2.0, use findByParentAndRoutePattern instead
     *
     * @return array
     */
    public function findByParentIdAndRoutePatternAndNodeIdAndSiteId($parentId, $routePattern, $nodeId, $siteId);

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
     * @deprecated will be removed in 1.2.0, use findVersion instead
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdAndVersion($nodeId, $language, $siteId, $version = null);

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
     * @param string       $author
     * @param boolean|null $published
     * @param int|null     $limit
     *
     * @return array
     * 
     * @deprecated will be removed in 1.2.0
     */
    public function findByAuthor($author, $published = null, $limit = null);

    /**
     * @param string       $author
     * @param string       $siteId
     * @param boolean|null $published
     * @param int|null     $limit
     * @param array|null   $sort
     *
     * @return array
     */
    public function findByAuthorAndSiteId($author, $siteId, $published = null, $limit = null, $sort = null);

    /**
     * @param string $siteId
     * @param bool   $themeSiteDefault
     *
     * @return array
     */
    public function findBySiteIdAndDefaultTheme($siteId, $themeSiteDefault = true);
}
