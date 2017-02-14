<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface BlockInterface
 */
interface BlockInterface extends ReadBlockInterface, TimestampableInterface
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
     * Set style
     *
     * @param string $style
     */
    public function setStyle($style);

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * Set site id
     *
     * @param string $siteId
     */
    public function setSiteId($siteId);
}
