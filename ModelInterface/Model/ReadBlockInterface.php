<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadBlockInterface
 */
interface ReadBlockInterface extends CacheableInterface
{
    /**
     * Get id
     *
     * @return string $id
     */
    public function getId();

    /**
     * Get component
     *
     * @return string $component
     */
    public function getComponent();

    /**
     * Get label
     *
     * @return string $label
     */
    public function getLabel();

    /**
     * Get attributes
     *
     * @return array
     */
    public function getAttributes();

    /**
     * @param string $name
     *
     * @return string|null
     */
    public function getAttribute($name);

    /**
     * Get style
     *
     * @return string $style
     */
    public function getStyle();

    /**
     * Get private
     *
     * @return boolean $private
     */
    public function isPrivate();

    /**
     * Get language
     *
     * @return string $language
     */
    public function getLanguage();

    /**
     * Get parameter
     *
     * @return array $parameter
     */
    public function getParameter();

    /**
     * Get transverse
     *
     * @return boolean
     */
    public function isTransverse();
}
