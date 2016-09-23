<?php

namespace OpenOrchestra\ModelInterface\Model;

use OpenOrchestra\UserBundle\Model\UserInterface;

/**
 * Interface ReportInterface
 */
interface ReportInterface
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
}
