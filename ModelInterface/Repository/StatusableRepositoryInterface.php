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
     * @param StatusableInterface $element
     *
     * @return StatusableInterface
     */
    public function findOneCurrentlyPublishedByElement(StatusableInterface $element);

    /**
     * @param StatusableInterface $element
     *
     * @return StatusableInterface
     */
    public function findPublishedInLastVersionWithoutFlag(StatusableInterface $element);

    /**
     * @param StatusableInterface $element
     *
     * @return array
     */
    public function findAllCurrentlyPublishedByElementId(StatusableInterface $element);
}
