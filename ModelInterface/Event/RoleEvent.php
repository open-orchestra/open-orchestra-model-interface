<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\RoleInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class RoleEvent
 */
class RoleEvent extends Event
{
    protected $role;

    /**
     * @param RoleInterface $role
     */
    public function __construct(RoleInterface $role)
    {
        $this->role = $role;
    }

    /**
     * @return RoleInterface
     */
    public function getRole()
    {
        return $this->role;
    }
}
