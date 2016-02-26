<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface FieldTypeInterface
 */
Interface FieldTypeInterface extends TranslatedValueContainerInterface
{
    /**
     * Set FieldId
     *
     * @param string $fieldId
     */
    public function setFieldId($fieldId);

    /**
     * Get FieldId
     *
     * @return string
     */
    public function getFieldId();

    /**
     * @param TranslatedValueInterface $label
     */
    public function addLabel(TranslatedValueInterface $label);

    /**
     * @param TranslatedValueInterface $label
     */
    public function removeLabel(TranslatedValueInterface $label);

    /**
     * Get Label
     *
     * @return ArrayCollection
     */
    public function getLabels();

    /**
     * @param string $language
     *
     * @return mixed
     */
    public function getLabel($language = 'fr');

    /**
     * Set Default Value
     *
     * @param string $value
     */
    public function setDefaultValue($value);

    /**
     * Get Default Value
     *
     * @return string
     */
    public function getDefaultValue();

    /**
     * Set Searchable
     *
     * @param boolean $searchable
     */
    public function setSearchable($searchable);

    /**
     * @return boolean
     */
    public function isSearchable();

    /**
     * Set Orderable
     *
     * @param boolean $orderable
     */
    public function setOrderable($orderable);

    /**
     * @return boolean
     */
    public function isOrderable();

    /**
     * @return string
     */
    public function getOrderDirection();

    /**
     * @param string $orderDirection
     */
    public function setOrderDirection($orderDirection);

    /**
     * Set Listable
     *
     * @param boolean $listable
     */
    public function setListable($listable);

    /**
     * @return boolean
     */
    public function getListable();

    /**
     * Set Type
     *
     * @param string $type
     */
    public function setType($type);

    /**
     * Get Type
     *
     * @return string
     */
    public function getType();

    /**
     * @param FieldOptionInterface $option
     */
    public function addOption(FieldOptionInterface $option);

    /**
     * @param FieldOptionInterface $option
     */
    public function removeOption(FieldOptionInterface $option);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasOption($key);

    /**
     * clear Options
     */
    public function clearOptions();

    /**
     * @return ArrayCollection
     */
    public function getOptions();

    /**
     * @return array
     */
    public function getFormOptions();

    /**
     * @return boolean
     */
    public function isTranslatable();

    /**
     * @param boolean $translatable
     */
    public function setTranslatable($translatable);

    /**
     * @return string
     */
    public function getFieldTypeSearchable();

    /**
     * Set field searchable
     *
     * @param string $fieldTypeSearchable
     */
    public function setFieldTypeSearchable($fieldTypeSearchable);
}
