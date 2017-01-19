<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\ModelInterface\Model\WorkflowProfileInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface WorkflowProfileRepositoryInterface
 */
interface WorkflowProfileRepositoryInterface
{

    /**
     * @param $id
     *
     * @return WorkflowProfileInterface|null
     */
    public function find($id);

    /**
     * Test is a transition ($fromStatus, $toStatus) exists
     *
     * @param StatusInterface $fromStatus
     * @param StatusInterface $toStatus
     *
     * @return boolean
     */
    public function hasTransition(StatusInterface $fromStatus, StatusInterface $toStatus);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();

    /**
     * @param array $workflowProfileIds
     *
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function removeWorkflowProfiles(array $workflowProfileIds);

    /**
     * @param string $currentLocale
     *
     * @return array
     */
    public function findAllOrderedByLocale($currentLocale);
}
