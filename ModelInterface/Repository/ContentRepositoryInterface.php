<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\UseTrackableTraitInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\ModelInterface\Repository\RepositoryTrait\AutoPublishableTraitInterface;

/**
 * Interface ContentRepositoryInterface
 */
interface ContentRepositoryInterface extends ReadContentRepositoryInterface, StatusableElementRepositoryInterface, StatusableRepositoryInterface, UseTrackableTraitInterface, AutoPublishableTraitInterface
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
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $contentType
     * @param string                      $siteId
     * @param string                      $language
     *
     * @return array
     */
    public function findForPaginateFilterByContentTypeSiteAndLanguage(PaginateFinderConfiguration $configuration, $contentType, $siteId, $language);

    /**
     * @param string $contentType
     * @param string $siteId
     * @param string $language
     *
     * @return int
     */
    public function countFilterByContentTypeSiteAndLanguage($contentType, $siteId, $language);

    /**
     * @param PaginateFinderConfiguration $configuration
     * @param string                      $contentType
     * @param string                      $siteId
     * @param string                      $language
     *
     * @return int
     */
    public function countWithFilterAndContentTypeSiteAndLanguage(PaginateFinderConfiguration $configuration, $contentType, $siteId, $language);

    /**
     * @param string $contentType
     *
     * @return int
     */
    public function countByContentType($contentType);

    /**
     * @param string $contentId
     *
     * @return array
     */
    public function findAllPublishedByContentId($contentId);

    /**
     * @param string       $id
     * @param string       $siteId
     * @param array|null   $eventTypes
     * @param boolean|null $published
     * @param int|null     $limit
     * @param array|null   $sort
     *
     * @return array
     */
    public function findByHistoryAndSiteId($id, $siteId, array $eventTypes = null, $published = null, $limit = null, array $sort = null);

    /**
     * @param string $entityId
     *
     * @return ContentInterface
     */
    public function findById($entityId);

    /**
     * @param StatusInterface $status
     * @param string          $contentType
     */
    public function updateStatusByContentType(StatusInterface $status, $contentType);

    /**
     * @param array $contentIds
     */
    public function removeContentIds(array $contentIds);
}
