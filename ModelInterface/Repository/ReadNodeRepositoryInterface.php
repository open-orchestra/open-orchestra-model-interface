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
     * @return ReadNodeInterface
     */
    public function findOneByNodeIdAndLanguageWithPublishedAndLastVersionAndSiteId($nodeId, $language, $siteId);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return ReadNodeInterface
     */
    public function findLastPublishedVersionByLanguageAndSiteId($language, $siteId);

    /**
     * @deprecated use getFooterTreeByLanguageAndSiteId
     *
     * @param string $language
     *
     * @return array
     */
    public function getFooterTree($language = null);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getFooterTreeByLanguageAndSiteId($language, $siteId);

    /**
     * @deprecated use getMenuTreeByLanguageAndSiteId
     *
     * @param string $language
     *
     * @return array
     */
    public function getMenuTree($language = null);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function getMenuTreeByLanguageAndSiteId($language, $siteId);

    /**
     * @deprecated use getSubMenuByNodeIdAndNbLevelAndLanguageAndSiteId
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     *
     * @return array
     */
    public function getSubMenu($nodeId, $nbLevel, $language = null);

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
}
