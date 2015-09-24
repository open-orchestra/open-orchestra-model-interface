<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ReadSiteInterface;

/**
 * Interface ReadSiteRepositoryInterface
 */
interface ReadSiteRepositoryInterface
{
    /**
     * @param string $siteId
     *
     * @return ReadSiteInterface
     */
    public function findOneBySiteId($siteId);

    /**
     * @param boolean $deleted
     *
     * @return array
     */
    public function findByDeleted($deleted);

    /**
     * @param string $domain
     *
     * @return ReadSiteInterface
     */
    public function findByAliasDomain($domain);
}
