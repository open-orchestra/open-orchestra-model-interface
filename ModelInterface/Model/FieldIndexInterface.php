<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface FieldIndexInterface
 */
Interface FieldIndexInterface
{
    /**
     * @param string $fieldName
     */
    public function setFieldName($fieldName);

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType);

    /**
     * @return string
     */
    public function getFieldType();

    /**
     * @param boolean $link
     */
    public function setLink($link);

    /**
     * @return boolean
     */
    public function isLink();
}
