<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\WorkflowProfileInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class WorkflowProfileEvent
 */
class WorkflowProfileEvent extends Event
{
    protected $workflowProfile;

    /**
     * @param WorkflowProfileInterface $workflowProfile
     */
    public function __construct(WorkflowProfileInterface $workflowProfile)
    {
        $this->workflowProfile = $workflowProfile;
    }

    /**
     * @return WorkflowProfileInterface
     */
    public function getWorkflowProfile()
    {
        return $this->workflowProfile;
    }
}
