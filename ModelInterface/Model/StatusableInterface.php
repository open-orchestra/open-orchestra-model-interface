<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface StatusableInterface
 */
interface StatusableInterface extends VersionableInterface
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
    public function isCurrentlyPublished();

    /**
     * @param bool $currentlyPublished
     */
    public function setCurrentlyPublished($currentlyPublished);
}
