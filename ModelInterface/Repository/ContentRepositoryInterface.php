<?php

namespace PHPOrchestra\ModelInterface\Repository;

use PHPOrchestra\ModelInterface\Model\ContentInterface;

/**
 * Interface ContentRepositoryInterface
 */
interface ContentRepositoryInterface
{
    /**
     * Get all content if the contentType is "news"
     *
     * @return array list of news
     */
    public function findAllNews();

    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $contentId
     *
     * @return ContentInterface
     */
    public function findOneByContentId($contentId);

    /**
     * @param string      $contentType
     * @param string|null $keywords
     *
     * @return mixed
     */
    public function findByContentTypeAndKeywords($contentType = '', $keywords = null);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return ContentInterface
     */
    public function findOneByContentIdAndLanguage($contentId, $language);
}
