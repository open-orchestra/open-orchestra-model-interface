<?php

namespace OpenOrchestra\ModelInterface\Repository;

use Doctrine\Common\Collections\Collection;
use OpenOrchestra\ModelInterface\Model\RouteDocumentInterface;

/**
 * Interface RouteDocumentRepositoryInterface
 */
interface RouteDocumentRepositoryInterface
{
    /**
     * @return array|Collection
     */
    public function findAll();

    /**
     * @param string $name
     *
     * @return RouteDocumentInterface
     */
    public function findOneByName($name);

    /**
     * @param string $pathInfo
     *
     * @return Collection
     */
    public function findByPathInfo($pathInfo);

    /**
     * @param string $nodeId
     * @param string $siteId
     * @param string $language
     *
     * @return Collection
     */
    public function findByNodeIdSiteIdAndLanguage($nodeId, $siteId, $language);

    /**
     * @param string $siteId
     *
     * @return Collection
     */
    public function findBySite($siteId);
}
