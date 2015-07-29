<?php

namespace OpenOrchestra\ModelInterface\Repository;
use OpenOrchestra\ModelInterface\Model\ReadNodeInterface;

/**
 * Interface ReadNodeRepositoryInterface
 */
interface ReadNodeRepositoryInterface
{
    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     */
    public function findOnePublishedByNodeIdAndLanguageAndSiteIdInLastVersion($nodeId, $language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedVersionByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
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
    public function getMenuTreeByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getSubMenuByNodeIdAndNbLevelAndLanguageAndSiteId($nodeId, $nbLevel, $language, $siteId);

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
