<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\WorkflowFunctionInterface;

/**
 * Interface WorkflowRightRepositoryInterface
 */
interface WorkflowRightRepositoryInterface
{
    /**
     * @param string $userId
     *
     * @return  \OpenOrchestra\ModelInterface\Model\WorkflowRightInterface
     */
    public function findOneByUserId($userId);

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function find($id);

    /**
     * @param WorkflowFunctionInterface $workflowFunction
     *
     * @return bool
     */
    public function hasElementWithWorkflowFunction(WorkflowFunctionInterface $workflowFunction);
}
