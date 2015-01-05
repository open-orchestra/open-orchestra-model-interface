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
     * @param string $keywords
     *
     * @return array
     */
    public function findByKeywords($keywords);

    /**
     * @param string $contentType
     *
     * @return array
     */
    public function findByContentType($contentType);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return ContentInterface
     */
    public function findOneByContentIdAndLanguage($contentId, $language);
}
