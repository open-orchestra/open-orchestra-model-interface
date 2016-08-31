<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface RoleInterface
 */
interface RoleInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return StatusInterface
     */
    public function getToStatus();

    /**
     * @param StatusInterface $toStatus
     */
    public function setToStatus(StatusInterface $toStatus);

    /**
     * @return StatusInterface
     */
    public function getFromStatus();

    /**
     * @param StatusInterface $fromStatus
     */
    public function setFromStatus(StatusInterface $fromStatus);

    /**
     * @param string $language
     * @param string $description
     */
    public function addDescription($language, $description);

    /**
     * @param string $language
     */
    public function removeDescription($language);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getDescription($language);

    /**
     * @return array
     */
    public function getDescriptions();

    /**
     * @param array $descriptions
     */
    public function setDescriptions(array $descriptions);
}
