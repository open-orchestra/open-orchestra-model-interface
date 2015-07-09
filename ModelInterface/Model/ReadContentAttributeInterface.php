<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReadContentAttributeInterface
 */
interface ReadContentAttributeInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function  getStringValue();
}
