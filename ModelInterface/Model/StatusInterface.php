<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * interface StatusInterface
 */
interface StatusInterface
{
    const ENTITY_TYPE = 'status';

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
     * @param boolean $publishedState
     */
    public function setPublishedState($publishedState);

    /**
     * @return boolean
     */
    public function isPublishedState();

    /**
     * @param boolean $blockedEdition
     */
    public function setBlockedEdition($blockedEdition);

    /**
     * @return boolean
     */
    public function isBlockedEdition();

    /**
     * @param boolean $outOfWorkflow
     */
    public function setOutOfWorkflow($outOfWorkflow);

    /**
     * @return boolean
     */
    public function isOutOfWorkflow();

    /**
     * @param boolean $initialState
     */
    public function setInitialState($initialState);

    /**
     * @return boolean
     */
    public function isInitialState();

    /**
     * @param boolean $autoPublishFromState
     */
    public function setAutoPublishFromState($autoPublishFromState);

    /**
     * @return boolean
     */
    public function isAutoPublishFromState();

    /**
     * @param boolean $autoUnpublishToState
     */
    public function setAutoUnpublishToState($autoUnpublishToState);

    /**
     * @return boolean
     */
    public function isAutoUnpublishToState();

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

    /**
     * @param boolean $translationState
     */
    public function setTranslationState($translationState);

    /**
     * @return boolean
     */
    public function isTranslationState();
}
