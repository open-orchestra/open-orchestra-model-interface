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
     * @deprecated will be removed in 0.3.0, use findLastOnePublishedByNodeIdAndSiteId instead
     *
     * @return ReadNodeInterface
     */
    public function findOneByNodeIdAndLanguageWithPublishedAndLastVersionAndSite($nodeId, $language, $siteId);

    /**
     * @param string $nodeId
     * @param string $language
     * @param string $siteId
     *
     * @return mixed
     */
    public function findLastOnePublishedByNodeIdAndSite($nodeId, $language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use findLastPublishedByLanguageAndSite instead
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedVersionByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedByLanguageAndSite($language, $siteId);


    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use getFooterTreeByLanguageAndSite instead
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
    public function getFooterTreeByLanguageAndSite($language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use getMenuTreeByLanguageAndSite instead
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
    public function getMenuTreeByLanguageAndSite($language, $siteId);

    /**
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     * @param string $siteId
     *
     * @deprecated will be removed in 0.3.0, use getSubMenuByNodeNbLevelAndLanguage instead
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
    public function getSubMenuByNodeIdNbLevelAndLanguage($nodeId, $nbLevel, $language, $siteId);

    /**
     * @return ReadNodeInterface
     */
    public function findLastPublished();
}
