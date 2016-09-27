<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ContentInterface
 */
interface ContentInterface extends ReadContentInterface, StatusableInterface, TimestampableInterface, BlameableInterface, SiteLinkableInterface, SoftDeleteableInterface, UseTrackableInterface, ReportableInterface
{
    const ENTITY_TYPE = 'content';
    const TRASH_ITEM_TYPE = 'content';

    /**
     * @param ContentAttributeInterface $attribute
     */
    public function addAttribute(ContentAttributeInterface $attribute);

    /**
     * @param ContentAttributeInterface $attribute
     */
    public function removeAttribute(ContentAttributeInterface $attribute);

    /**
     * @param string $contentId
     */
    public function setContentId($contentId);

    /**
     * @return string
     */
    public function getContentId();

    /**
     * @param string $contentType
     */
    public function setContentType($contentType);

    /**
     * @param int $contentTypeVersion
     */
    public function setContentTypeVersion($contentTypeVersion);

    /**
     * @return int
     */
    public function getContentTypeVersion();

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * Set siteId
     *
     * @param String $siteId
     */
    public function setSiteId($siteId);
}
