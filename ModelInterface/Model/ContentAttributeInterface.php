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
     * @param string $value
     */
    public function setValue($value);
}
