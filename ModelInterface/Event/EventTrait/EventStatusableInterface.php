<?php

namespace OpenOrchestra\ModelInterface\Event\EventTrait;

use OpenOrchestra\ModelInterface\Model\StatusableInterface;
use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface EventStatusableInterface
 */
interface EventStatusableInterface
{
    /**
     * @return StatusInterface|null
     */
    public function getPreviousStatus();

    /**
     * @return StatusableInterface
     */
    public function getStatusableElement();
}
