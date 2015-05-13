<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;

/**
 * Interface ContentRepositoryInterface
 */
interface ContentRepositoryInterface extends ReadContentRepositoryInterface
{
    /**
     * Get all content if the contentType is "news"
     *
     * @deprecated This will be removed in the 0.2.1 version
     *
     * @return array list of news
     */
    public function findAllNews();

    /**
     * @return array list of news
     */
    public function findAll();

    /**
     * @param string $name
     *
     * @return boolean
     */
    public function testUnicityInContext($name);

    /**
    * @param string $contentId
    *
    * @return ContentInterface
    */
    public function findOneByContentId($contentId);
    
    /**
     * @param string $contentId
     * @param string|null $language
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
     * @param string      $contentId
     * @param string $language
     *
     * @return array
     */
    public function findByContentIdAndLanguage($contentId, $language);

    /**
     * @param string      $contentId
     * @param string $language
     * @param int|null    $version
     *
     * @return ContentInterface|null
     */
    public function findOneByContentIdAndLanguageAndVersion($contentId, $language, $version = null);

    /**
     * @param string $contentType
     *
     * @return array
     */
    public function findByContentTypeInLastVersion($contentType = null);

    /**
     * @return array
     */
    public function findAllDeleted();
}
