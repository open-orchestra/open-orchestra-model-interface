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
     * @deprecated will be removed in 0.3.0, use findByParentIdAndSite instead
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function findByParentIdAndSiteId($parentId, $siteId);

    /**
     * @param string $parentId
     * @param string $siteId
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function findByParentIdAndSite($parentId, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findLastOneByNodeLanguageAndSite instead
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndSiteIdAndLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     */
    public function findLastOneByNodeIdLanguageAndSite($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findByNodeIdLanguageAndSite instead
     *
     * @return mixed
     *
     * @throws \Exception
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
    public function findByNodeIdLanguageAndSite($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findPublishedByNodeIdLanguageAndSite instead
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function findByNodeIdAndLanguageAndSiteIdAndPublishedOrderedByVersion($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function findPublishedByNodeIdLanguageAndSite($nodeId, $language, $siteId);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @deprecated will be removed in 0.3.0, use findLastBySite instead
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
    public function findLastBySite($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $siteId
     * @param string $type
     *
     * @deprecated will be removed in 0.3.0, use findLastDeletedBySite instead
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
    public function findLastDeletedBySite($siteId, $type = NodeInterface::TYPE_DEFAULT);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @deprecated will be removed in 0.3.0, use findChildrenByPathSiteAndLanguage instead
     *
     * @return mixed
     */
    public function findChildsByPathAndSiteIdAndLanguage($path, $siteId, $language);

    /**
     * @param string $path
     * @param string $siteId
     * @param string $language
     *
     * @return mixed
     */
    public function findChildrenByPathSiteAndLanguage($path, $siteId, $language);

    /**
     * @param string $nodeId
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findByNodeIdAndSite instead
     *
     * @return mixed
     *
     * @throws \Exception
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
    public function findByNodeIdAndSite($nodeId, $siteId);

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
     * @deprecated will be removed in 0.3.0, use findByParentIdRouteNodeIdAndSite instead
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
    public function findByParentIdRouteNodeIdAndSite($parentId, $routePattern, $nodeId, $siteId);

    /**
     * @param string      $nodeId
     * @param string      $language
     * @param string      $siteId
     * @param int|null    $version
     *
     * @deprecated will be removed in 0.3.0, use findOneByNodeIdLanguageSiteAndVersion instead
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageAndVersionAndSiteId($nodeId, $language, $siteId, $version = null);

    /**
     * @param string   $nodeId
     * @param string   $language
     * @param string   $siteId
     * @param int|null $version
     *
     * @return mixed
     */
    public function findOneByNodeIdLanguageSiteAndVersion($nodeId, $language, $siteId, $version = null);

}
