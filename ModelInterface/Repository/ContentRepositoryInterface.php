<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use OpenOrchestra\Pagination\Configuration\FinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\UseTrackableTraitInterface;

/**
 * Interface ContentRepositoryInterface
 */
interface ContentRepositoryInterface extends ReadContentRepositoryInterface, StatusableElementRepositoryInterface, StatusableRepositoryInterface, UseTrackableTraitInterface
{
    /**
     * @return array list of news
     */
    public function findAll();

    /**
     * @param string $name
     *
     * @return boolean
     */
    public function testUniquenessInContext($name);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return ContentInterface|null
     */
    public function findOneByLanguage($contentId, $language);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return array
     */
    public function findByLanguage($contentId, $language);

    /**
     * @param string $contentId
     *
     * @return array
     */
    public function findByContentId($contentId);

    /**
     * @param string      $contentId
     * @param string      $language
     * @param int|null    $version
     *
     * @return ContentInterface|null
     */
    public function findOneByLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @param string|null                 $contentType
     * @param PaginateFinderConfiguration $configuration
     * @param string|null                 $siteId
     *
     * @return array
     */
    public function findPaginatedLastVersionByContentTypeAndSite($contentType = null, PaginateFinderConfiguration $configuration = null, $siteId = null);

    /**
     * @param string|null         $contentType
     * @param FinderConfiguration $configuration
     * @param int|null            $siteId
     *
     * @return int
     */
    public function countByContentTypeInLastVersionWithFilter($contentType, FinderConfiguration $configuration = null, $siteId = null);

    /**
     * @param string|null $contentType
     *
     * @return int
     * @deprecated will be removed in 2.0, use countByContentTypeAndSiteInLastVersion
     */
    public function countByContentTypeInLastVersion($contentType = null);

    /**
     * @param string      $contentType
     * @param string|null $siteId
     *
     * @return int
     */
    public function countByContentTypeAndSiteInLastVersion($contentType, $siteId = null);

    /**
     * @param string $contentType
     *
     * @return int
     */
    public function countByContentType($contentType);

    /**
     * @param string       $author
     * @param string       $siteId
     * @param boolean|null $published
     * @param array|null   $sort
     * @param int|null     $limit
     *
     * @return array
     * @deprecated will be removed in 2.0
     */
    public function findByAuthorAndSiteId($author, $siteId, $published = null, $limit = null, $sort = null);

    /**
     * @param string       $id
     * @param string       $siteId
     * @param boolean|null $published
     * @param int|null     $limit
     * @param array        $sort
     *
     * @return array
     */
    public function findByReportAndSiteId($id, $siteId, $published = null, $limit = null, $sort = null);

    /**
     * @param string $entityId
     *
     * @return ContentInterface
     */
    public function findById($entityId);
}
