<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface ReadNodeRepositoryInterface
 */
interface ReadNodeRepositoryInterface
{
    /**
     * @param string      $nodeId
     * @param string|null $language
     * @param string|null $siteId
     *
     * @return mixed
     */
    public function findOneByNodeIdAndLanguageWithPublishedAndLastVersionAndSiteId($nodeId, $language = null, $siteId = null);

    /**
     * @param string $language
     * @param string $siteId
     *
     * @return array
     */
    public function findLastPublishedVersionByLanguageAndSiteId($language, $siteId);

    /**
     * @param string $language
     *
     * @return array
     */
    public function getFooterTree($language = null);

    /**
     * @param string $language
     *
     * @return array
     */
    public function getMenuTree($language = null);

    /**
     * @param string $nodeId
     * @param int    $nbLevel
     * @param string $language
     *
     * @return array
     */
    public function getSubMenu($nodeId, $nbLevel, $language = null);
}
