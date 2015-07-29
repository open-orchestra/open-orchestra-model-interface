<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\NodeInterface;

/**
 * Interface NodeRepositoryInterface
 */
interface NodeRepositoryInterface extends ReadNodeRepositoryInterface
{

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $entityId
     *
     * @return NodeInterface
     */
    public function findOneById($entityId);

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
    public function findByParentIdAndSiteId($parentId, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdInLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @throws \Exception
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
    public function findByNodeIdAndLanguageAndSiteIdAndPublishedOrderedByVersion($nodeId, $language, $siteId);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findLastVersionBySiteId($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @deprecated will be removed in 0.3.0, use findDeletedInLastVersionBySiteId instead
     *
     * @return array
     */
    public function findLastVersionByDeletedAndSiteId($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @return array
     */
    public function findDeletedInLastVersionBySiteId($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @return mixed
     */
    public function findChildrenByPathAndSiteIdAndLanguage($path, $siteId, $language);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeIdAndSiteId($nodeId, $siteId);

    /**
     * @param string $type
     *
     * @throws \Exception
     *
     * @return array
     */
    public function findByNodeType($type = NodeInterface::TYPE_DEFAULT);

    /**
     *
     * @param string $parentId
     * @param string $routePattern
     * @param string $nodeId
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findByParentIdAndRoutePatternAndNodeIdAndSiteId instead
     *
     * @return array
     */
    public function findByParentIdAndRoutePatternAndNotNodeIdAndSiteId($parentId, $routePattern, $nodeId, $siteId);

    /**
     *
     * @param string $parentId
     * @param string $routePattern
     * @param string $nodeId
     * @param string $siteId
     *
     * @return array
     */
    public function findByParentIdAndRoutePatternAndNodeIdAndSiteId($parentId, $routePattern, $nodeId, $siteId);

    /**
     * @param string   $nodeId
     * @param string   $language
     * @param string   $siteId
     * @param int|null $version
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdAndVersion($nodeId, $language, $siteId, $version = null);

}
