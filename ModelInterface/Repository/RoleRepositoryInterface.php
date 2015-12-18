<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\ModelInterface\Model\RoleInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface RoleRepositoryInterface
 */
interface RoleRepositoryInterface extends PaginationRepositoryInterface, StatusableElementRepositoryInterface
{
    /**
     * Find the role that connect fromStatus to toStatus
     *
     * @param StatusInterface $fromStatus
     * @param StatusInterface $toStatus
     *
     * @return RoleInterface
     */
    public function findOneByFromStatusAndToStatus(StatusInterface $fromStatus, StatusInterface $toStatus);

    /**
     * @return array
     */
    public function findAll();

    /**
     * @return array
     */
    public function findAccessRole();

    /**
     * @return array
     */
    public function findWorkflowRole();
}
