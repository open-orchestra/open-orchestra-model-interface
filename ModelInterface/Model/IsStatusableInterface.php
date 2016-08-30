<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface IsStatusableInterface
 */
interface IsStatusableInterface
{
    /**
     * @return boolean
     */
    public function isStatusable();

    /**
     * @param boolean $statusable
     */
    public function setStatusable($statusable);
}
