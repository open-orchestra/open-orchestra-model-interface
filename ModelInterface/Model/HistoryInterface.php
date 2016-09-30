<?php

namespace OpenOrchestra\ModelInterface\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Interface HistoryInterface
 */
interface HistoryInterface
{
    /**
     * Set user
     *
     * @param UserInterface $user
     */
    public function setUser(UserInterface $user);

    /**
     * Get user
     *
     * @return UserInterface $user
     */
    public function getUser();

    /**
     * Sets updatedAt.
     *
     * @param  \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * Returns updatedAt.
     *
     * @return \Datetime
     */
    public function getUpdatedAt();

    /**
     * Sets eventType
     *
     * @param  string $eventType
     */
    public function setEventType($eventType);

    /**
     * Returns eventType
     *
     * @return string
     */
    public function getEventType();
}
