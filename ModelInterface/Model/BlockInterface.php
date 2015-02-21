<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface BlockInterface
 */
interface BlockInterface
{
    /**
     * Set component
     *
     * @param string $component
     */
    public function setComponent($component);

    /**
     * Get component
     *
     * @return string $component
     */
    public function getComponent();

    /**
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label);

    /**
     * Get label
     *
     * @return string $label
     */
    public function getLabel();

    /**
     * Set class
     *
     * @param string $class
     */
    public function setClass($class);

    /**
     * Get class
     *
     * @return string $class
     */
    public function getClass();

    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id);

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId();

    /**
     * Set attributes
     *
     * @param array $attributes
     */
    public function setAttributes(array $attributes);

    /**
     * @param string $name
     * @param string $value
     */
    public function addAttribute($name, $value);

    /**
     * Get attributes
     *
     * @return array $attributes
     */
    public function getAttributes();

    /**
     * @param string $name
     *
     * @return string|null
     */
    public function getAttribute($name);

    /**
     * @return array
     */
    public function getAreas();

    /**
     * @param array $areas
     */
    public function setAreas(array $areas);

    /**
     * @param array $area
     */
    public function addArea(array $area);

    /**
     * @param string $areaId
     * @param string $nodeId
     */
    public function removeAreaRef($areaId, $nodeId);
}
