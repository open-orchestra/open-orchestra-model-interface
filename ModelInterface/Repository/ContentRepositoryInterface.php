<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;

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
     * @return ContentInterface
     */
    public function findLastPublishedVersionByContentIdAndLanguage($contentId, $language);

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
     * @return ContentInterface|null
     */
    public function findOneByContentIdAndLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @deprecated use findByContentTypeInLastVersionForPaginateAndSearch
     *
     * @param string $contentType
     *
     * @return array
     */
    public function findByContentTypeInLastVersion($contentType = null);

    /**
     * @param string|null $contentType
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @deprecated, use findByContentTypeInLastVersionForPaginateAndSearchAndSiteId instead
     *
     * @return array
     */
    public function findByContentTypeInLastVersionForPaginateAndSearch($contentType = null, $descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

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
     * @return array
     */
    public function findByContentTypeInLastVersionForPaginateAndSearchAndSiteId($contentType = null, $descriptionEntity = null, $columns = null, $search = null, $siteId = null, $order = null, $skip = null, $limit = null);

    /**
     * @param string|null $contentType
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     *
     * @return int
     */
    public function countByContentTypeInLastVersionWithSearchFilter($contentType = null, $descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param string|null $contentType
     *
     * @return int
     */
    public function countByContentTypeInLastVersion($contentType = null);

    /**
     * @return array
     */
    public function findAllDeleted();
}
