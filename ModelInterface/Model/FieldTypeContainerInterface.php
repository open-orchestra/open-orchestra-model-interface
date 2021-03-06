<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface FieldTypeContainerInterface
 */
Interface FieldTypeContainerInterface
{
    /**
     * @param FieldTypeInterface $field
     */
    public function addFieldType(FieldTypeInterface $field);

    /**
     * @param FieldTypeInterface $field
     */
    public function removeFieldType(FieldTypeInterface $field);

    /**
     * Get fields
     *
     * @return array $fields
     */
    public function getFields();
}
