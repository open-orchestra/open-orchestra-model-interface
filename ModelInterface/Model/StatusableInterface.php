<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface StatusableInterface
 */
interface StatusableInterface
{
    /**
     * Set status
     *
     * @param StatusInterface|null $status
     */
    public function setStatus(StatusInterface $status = null);

    /**
     * Get status
     *
     * @return StatusInterface
     */
    public function getStatus();

    /**
     * @return bool
     */
    public function hasStatusChanged();

    /**
     * @return bool
     */
    public function isCurrentlyPublished();

    /**
     * @param bool $currentlyPublished
     */
    public function setCurrentlyPublished($currentlyPublished);

    /**
     * @return string
     */
    public function getElementId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * Get siteId
     *
     * @return string $siteId
     */
    public function getSiteId();

    /**
     * Get language
     *
     * @return string $language
     */
    public function getLanguage();
}
