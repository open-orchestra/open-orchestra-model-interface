<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface SoftDeleteableInterface
 */
interface SoftDeleteableInterface
{
    /**
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted);

    /**
     * Get deleted
     *
     * @return boolean $deleted
     */
    public function getDeleted();
}
