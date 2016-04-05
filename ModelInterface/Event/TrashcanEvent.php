<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\SoftDeleteableInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class TrashcanEvent
 */
class TrashcanEvent extends Event
{
    protected $deletedEntity;

    /**
     * @param SoftDeleteableInterface $deletedEntity
     */
    public function __construct(SoftDeleteableInterface $deletedEntity)
    {
        $this->deletedEntity = $deletedEntity;
    }

    /**
     * @return SoftDeleteableInterface
     */
    public function getDeletedEntity()
    {
        return $this->deletedEntity;
    }
}
