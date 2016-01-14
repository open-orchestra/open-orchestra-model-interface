<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * interface StatusInterface
 */
interface StatusInterface extends TranslatedValueContainerInterface
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
     * @return ArrayCollection
     */
    public function getLabels();

    /**
     * @param TranslatedValueInterface $translatedValue
     */
    public function addLabel(TranslatedValueInterface $translatedValue);

    /**
     * @param TranslatedValueInterface $translatedValue
     */
    public function removeLabel(TranslatedValueInterface $translatedValue);

    /**
     * @param boolean $published
     */
    public function setPublished($published);

    /**
     * @return boolean
     */
    public function isPublished();

    /**
     * @param boolean $initial
     */
    public function setInitial($initial);

    /**
     * @return boolean
     */
    public function isInitial();

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
