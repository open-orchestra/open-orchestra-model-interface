<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TrashCanableInterface
 */
interface TrashCanDisplayableInterface extends SoftDeleteableInterface
{
    /**
     * @return string
     */
    public function getTrashCanName();
}
