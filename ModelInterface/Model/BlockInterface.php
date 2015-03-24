<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface BlockInterface
 */
interface BlockInterface extends ReadBlockInterface
{
    /**
     * Set component
     *
     * @param string $component
     */
    public function setComponent($component);

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
     * Set id
     *
     * @param string $id
     */
    public function setId($id);

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
