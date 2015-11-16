<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use OpenOrchestra\Pagination\Configuration\FinderConfiguration;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

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
     * @param string $language
     *
     * @deprecated will be removed in 1.2.0, use findOneByLanguage
     *
     * @return ContentInterface|null
     */
    public function findOneByContentIdAndLanguage($contentId, $language);

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
     * @deprecated will be removed in 1.2.0, use findByLanguage
     *
     * @return array
     */
    public function findByContentIdAndLanguage($contentId, $language);

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
     * @deprecated will be removed in 1.2.0, use findOneByLanguageAndVersion
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
    public function findOneByLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @param string|null                 $contentType
     * @param PaginateFinderConfiguration $configuration
     * @param string|null                 $siteId
     *
     * @deprecated will be removed in 1.2.0, use findPaginatedLastVersionByContentTypeAndSite
     *
     * @return array
     */
    public function findByContentTypeAndSiteIdInLastVersionForPaginate($contentType = null, PaginateFinderConfiguration $configuration = null, $siteId = null);

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
     *
     * @return array
     */
    public function countByContentTypeInLastVersionWithFilter($contentType = null, FinderConfiguration $configuration = null);

    /**
     * @param string|null $contentType
     *
     * @return int
     */
    public function countByContentTypeInLastVersion($contentType = null);

    /**
     * @param string       $author
     * @param boolean|null $published
     * @param int|null     $limit
     *
     * @return array
     * 
     * @deprecated will be removed in 1.2.0
     */
    public function findByAuthor($author, $published = null, $limit = null);

    /**
     * @param string       $author
     * @param string       $siteId
     * @param boolean|null $published
     * @param int|null     $limit
     *
     * @return array
     */
    public function findByAuthorAndSiteId($author, $siteId, $published = null, $limit = null);
}
