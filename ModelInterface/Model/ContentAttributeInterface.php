<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ContentAttributeInterface
 */
interface ContentAttributeInterface extends ReadContentAttributeInterface
{
    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @param mixed $value
     */
    public function setValue($value);

    /**
     * @param string $stringValue
     */
    public function setStringValue($stringValue);

    /**
     * @param string $type
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getType();
}
