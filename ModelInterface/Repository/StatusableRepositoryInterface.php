<?php

namespace OpenOrchestra\ModelInterface\Repository;
use OpenOrchestra\ModelInterface\Model\StatusableInterface;


/**
 * Interface StatusableRepositoryInterface
 */
interface StatusableRepositoryInterface
{
    /**
     * @param string $elementId
     * @param string $language
     * @param string $siteId
     *
     * @return StatusableInterface
     */
    public function findOneCurrentlyPublished($elementId, $language, $siteId);

    /**
     * @param string $elementId
     * @param string $language
     * @param string $siteId
     *
     * @return StatusableInterface
     */
    public function findPublishedInLastVersionWithoutFlag($elementId, $language, $siteId);

    /**
     * @param string $elementId
     * @param string $language
     * @param string $siteId
     *
     * @return StatusableInterface
     */
    public function findAllCurrentlyPublishedByElementId($elementId, $language, $siteId);
}
