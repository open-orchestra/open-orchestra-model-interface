<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface WorkflowProfileInterface
 */
interface WorkflowProfileInterface
{
    const ENTITY_TYPE = 'workflow_profile';

    /**
     * @return string
     */
    public function getId();

    /**
     * @param WorkflowTransitionInterface $transition
     */
    public function addTransition(WorkflowTransitionInterface $transition);

    /**
     * @param StatusInterface $fromStatus
     * @param StatusInterface $toStatus
     *
     * @return boolean
     */
    public function hasTransition(StatusInterface $fromStatus, StatusInterface $toStatus);

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
     * @return array
     */
    public function getLabels();

    /**
     * @param array $labels
     */
    public function setLabels(array $labels);

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
