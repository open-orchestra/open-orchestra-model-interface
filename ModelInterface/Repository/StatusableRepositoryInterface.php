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
    public function findOnePublished($elementId, $language, $siteId);

    /**
     * @param StatusableInterface $element
     *
     * @return array
     */
    public function findPublished(StatusableInterface $element);
}
