<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use OpenOrchestra\ModelInterface\Repository\Configuration\FinderConfiguration;
use OpenOrchestra\ModelInterface\Repository\Configuration\PaginateFinderConfiguration;

/**
 * Interface ContentRepositoryInterface
 */
interface ContentRepositoryInterface extends ReadContentRepositoryInterface
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
    *
    * @return ContentInterface
    */
    public function findOneByContentId($contentId);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return ContentInterface|null
     */
    public function findOneByContentIdAndLanguage($contentId, $language);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return array
     */
    public function findByContentIdAndLanguage($contentId, $language);

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
     * @deprecated will be removed in 0.3.0, use findOneByContentIdLanguageAndVersion instead
     *
     * @return ContentInterface|null
     */
    public function findOneByContentIdAndLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @param string      $contentId
     * @param string      $language
     * @param int|null    $version
     *
     * @return ContentInterface|null
     */
    public function findOneByContentIdLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @param string|null $contentType
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param string|null $siteId
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @deprecated will be removed in 0.3.0, use findByContentTypeAndSiteInLastVersionForPaginate instead
     *
     * @return array
     */
    public function findByContentTypeInLastVersionForPaginateAndSearchAndSiteId($contentType = null, $descriptionEntity = null, $columns = null, $search = null, $siteId = null, $order = null, $skip = null, $limit = null);

    /**
     * @param string|null                 $contentType
     * @param PaginateFinderConfiguration $configuration
     * @param string|null                 $siteId
     *
     * @return array
     */
    public function findByContentTypeAndSiteIdInLastVersionForPaginate($contentType = null, PaginateFinderConfiguration $configuration = null, $siteId = null);

    /**
     * @param string|null $contentType
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @deprecated will be removed in 0.3.0, use countByContentTypeInLastVersionWithFilter instead
     *
     * @return int
     */
    public function countByContentTypeInLastVersionWithSearchFilter($contentType = null, $descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param string|null         $contentType
     * @param FinderConfiguration $configuration
     *
     * @return array
     */
    public function countByContentTypeInLastVersionWithFilter($contentType = null, FinderConfiguration $configuration = null);

    /**
     * @param string|null $contentType
     *
     * @deprecated will be removed in 0.3.0, use countLastByType instead
     *
     * @return int
     */
    public function countByContentTypeInLastVersion($contentType = null);

    /**
     * @param string|null $contentType
     *
     * @return int
     */
    public function countLastByType($contentType = null);

    /**
     * @return array
     */
    public function findAllDeleted();
}
