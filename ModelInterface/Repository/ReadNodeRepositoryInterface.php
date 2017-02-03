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
     * @return NodeInterface
     */
    public function findOnePublished($nodeId, $language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return ReadNodeInterface
     */
    public function findPublishedByLanguageAndSiteId($language, $siteId);

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
     * @return array
     */
    public function getMenuTree($language, $siteId);

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
     * @param int    $skip
     * @param int    $limit
     *
     * @return array
     */
    public function findAllPublishedByTypeWithSkipAndLimit($nodeType, $skip, $limit);

    /**
     * @param string $nodeType
     *
     * @return int
     */
    public function countAllPublishedByType($nodeType);
}
