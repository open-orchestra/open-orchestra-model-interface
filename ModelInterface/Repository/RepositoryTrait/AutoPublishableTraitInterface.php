<?php

namespace OpenOrchestra\ModelInterface\Repository\RepositoryTrait;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface AutoPublishableTraitInterface
 */
interface AutoPublishableTraitInterface
{
    /**
     * Find all element (in all versions and all languages) ready to be auto-published
     *
     * @param string $siteId
     * @param array  $fromStatus
     *
     * @return array
     */
    public function findElementToAutoPublish($siteId, array $fromStatus);

    /**
     * Find all elements (in all versions and all langauges) ready to be auto-unpublished
     *
     * @param string          $siteId
     * @param StatusInterface $publishedStatus
     *
     * @return array
     */
    public function findElementToAutoUnpublish($siteId, StatusInterface $publishedStatus);
}
