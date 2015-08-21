<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TrashCanableInterface
 */
interface TrashCanableInterface
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

    /**
     * @return string
     */
    public function getTrashCanName();
}
