<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadBlockInterface
 */
interface ReadBlockInterface extends CacheableInterface
{
    /**
     * Get component
     *
     * @return string $component
     */
    public function getComponent();

    /**
     * Get class
     *
     * @return string $class
     */
    public function getClass();

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId();

    /**
     * Get attributes
     *
     * @return array $attributes
     */
    public function getAttributes();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getAttribute($name);
}
