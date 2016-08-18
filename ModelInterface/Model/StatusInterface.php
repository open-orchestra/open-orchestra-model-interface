<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * interface StatusInterface
 */
interface StatusInterface
{
    /**
     * @return string
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
     * @return array
     */
    public function getLabels();

    /**
     * @param array $labels
     */
    public function setLabels(array $labels);

    /**
     * @param string $language
     * @param string $label
     */
    public function addLabel($language, $label);

    /**
     * @param string $language
     */
    public function removeLabel($language);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getLabel($language);

    /**
     * @param boolean $published
     */
    public function setPublished($published);

    /**
     * @return boolean
     */
    public function isPublished();

    /**
     * @param boolean $blockedEdition
     */
    public function setBlockedEdition($blockedEdition);

    /**
     * @return boolean
     */
    public function isBlockedEdition();

    /**
     * @param boolean $initial
     */
    public function setInitial($initial);

    /**
     * @return boolean
     */
    public function isInitial();

    /**
     * @return boolean
     */
    public function isAutoPublishFrom();

    /**
     * @return boolean
     */
    public function isAutoUnpublishTo();

    /**
     * @return ArrayCollection
     */
    public function getFromRoles();

    /**
     * @param RoleInterface $role
     */
    public function addFromRole(RoleInterface $role);

    /**
     * @param RoleInterface $role
     */
    public function removeFromRole(RoleInterface $role);

    /**
     * @param RoleInterface $role
     */
    public function addToRole(RoleInterface $role);

    /**
     * @param RoleInterface $role
     */
    public function removeToRole(RoleInterface $role);

    /**
     * @return ArrayCollection
     */
    public function getToRoles();

    /**
     * @return mixed
     */
    public function getDisplayColor();

    /**
     * @param mixed $displayColor
     */
    public function setDisplayColor($displayColor);
}
