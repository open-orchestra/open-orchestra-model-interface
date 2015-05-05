<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\NodeInterface;

/**
 * Interface NodeRepositoryInterface
 */
interface NodeRepositoryInterface extends ReadNodeRepositoryInterface
{
    /**
     * @param string $parentId
     * @param string $routePattern
     * @param string $siteId
     *
     * @deprecated Used in dynamic routing only
     *
     * @return mixed
     */
    public function findOneByParendIdAndRoutePatternAndSiteId($parentId, $routePattern, $siteId);

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
     * @param string $nodeId
     *
     * @return NodeInterface
     */
    public function findOneByNodeId($nodeId);

    /**
     * @param string $parentId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByParentIdAndSiteId($parentId);

    /**
     * @param string      $nodeId
     * @param string|null $language
     * @param string|null $siteId
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdAndLastVersion($nodeId, $language = null, $siteId = null);

    /**
     * @param string      $nodeId
     * @param string|null $language
     * @param string|null $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeIdAndLanguageAndSiteId($nodeId, $language = null, $siteId = null);

    /**
     * @param string      $nodeId
     * @param string|null $language
     * @param string|null $siteId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeIdAndLanguageAndSiteIdAndPublishedOrderedByVersion($nodeId, $language = null, $siteId = null);

    /**
     * @param string $type
     * @param string $siteId
     *
     * @return array
     */
    public function findLastVersionBySiteId($type = NodeInterface::TYPE_DEFAULT, $siteId = null);

    /**
     * @param string $type
     *
     * @return array
     */
    public function findLastVersionByDeletedAndSiteId($type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $nodeId
     *
     * @throws \Exception
     *
     * @return mixed
     */
    public function findByNodeIdAndSiteId($nodeId);

    /**
     * @param string $type
     *
     * @throws \Exception
     *
     * @return array
     */
    public function findByNodeType($type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $parentId
     * @param string $routePattern
     * @param string $nodeId
     *
     * @return array
     */
    public function findByParentIdAndRoutePatternAndNotNodeId($parentId, $routePattern, $nodeId);

    /**
     * @param string      $nodeId
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndVersionAndSiteId($nodeId);

}
