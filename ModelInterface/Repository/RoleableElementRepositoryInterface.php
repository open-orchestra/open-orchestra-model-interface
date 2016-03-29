<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\RoleInterface;

/**
 * Interface RoleableElementRepositoryInterface
 */
interface RoleableElementRepositoryInterface
{
    /**
     * @param RoleInterface $role
     *
     * @return bool
     */
    public function hasElementWithRole(RoleInterface $role);
}
