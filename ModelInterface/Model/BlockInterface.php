<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface BlockInterface
 */
interface BlockInterface extends ReadBlockInterface
{
    const ENTITY_TYPE = 'block';

    /**
     * Set component
     *
     * @param string $component
     */
    public function setComponent($component);

    /**
     * Set transverse
     *
     * @param boolean $transverse
     */
    public function setTransverse($transverse);

    /**
     * Get transverse
     *
     * @return boolean
     */
    public function isTransverse();

    /**
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label);

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
     * @param string $name
     *
     * @return string|null
     */
    public function getAttribute($name);

    /**
     * Set class
     *
     * @param string $class
     */
    public function setClass($class);

    /**
     * Set private
     *
     * @param boolean $private
     */
    public function setPrivate($private);

    /**
     * Set parameter
     *
     * @param array $parameter
     */
    public function setParameter(array $parameter);
}
