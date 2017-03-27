<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ReadBlockInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface BlockRepositoryInterface
 */
interface BlockRepositoryInterface
{
    /**
     * @param string $id
     *
     * @return null|\OpenOrchestra\ModelInterface\Model\ReadBlockInterface
     */
    public function findById($id);

    /**
     * @param string $component
     * @param string $siteId
     * @param string $language
     *
     * @return array
     */
    public function findTransverseBlock($component, $siteId, $language);

    /**
     * @param string $code
     * @param string $language
     *
     * @return ReadBlockInterface|null
     */
    public function findTransverseBlockByCodeAndLanguage($code, $language);

    /**
     * @param string                      $siteId
     * @param string                      $language
     * @param PaginateFinderConfiguration $configuration
     * @param boolean                     $transverse
     *
     * @return array
     */
    public function findForPaginateBySiteIdAndLanguage(PaginateFinderConfiguration $configuration, $siteId, $language, $transverse);

    /**
     * @param string                      $siteId
     * @param string                      $language
     * @param PaginateFinderConfiguration $configuration
     * @param boolean                     $transverse
     *
     * @return int
     */
    public function countWithFilterBySiteIdAndLanguage(PaginateFinderConfiguration $configuration, $siteId, $language, $transverse);

    /**
     * @param string  $siteId
     * @param string  $language
     * @param boolean $transverse
     *
     * @return int
     */
    public function countBySiteIdAndLanguage($siteId, $language, $transverse);
}
