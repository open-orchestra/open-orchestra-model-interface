<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface ContentTypeInterface
 */
interface ContentTypeInterface extends FieldTypeContainerInterface, BlameableInterface, TimestampableInterface, VersionableInterface, SiteLinkableInterface, SoftDeleteableInterface
{
    const ENTITY_TYPE = 'content_type';

    /**
     * @param string $contentTypeId
     */
    public function setContentTypeId($contentTypeId);

    /**
     * @return string
     */
    public function getContentTypeId();

    /**
     * @param string $template
     */
    public function setTemplate($template);

    /**
     * @return string
     */
    public function getTemplate();

    /**
     * @param Collection $fields
     */
    public function setFields(Collection $fields);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $language
     * @param string $name
     */
    public function addName($language, $name);

    /**
     * @param string $language
     */
    public function removeName($language);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getName($language);

    /**
     * @return array
     */
    public function getNames();

    /**
     * @param array $names
     */
    public function setNames(array $names);

    /**
     * @return array
     */
    public function getDefaultListable();

    /**
     * @param string  $name
     * @param boolean $value
     */
    public function addDefaultListable($name, $value);

    /**
     * @param string $name
     */
    public function removeDefaultListable($name);

    /**
     * @param array $defaultListable
     */
    public function setDefaultListable(array $defaultListable);

    /**
     * @param boolean $definingVersionable
     */
    public function setDefiningVersionable($definingVersionable);

    /**
     * @return boolean
     */
    public function isDefiningVersionable();

    /**
     * @param boolean $definingStatusable
     */
    public function setDefiningStatusable($definingStatusable);

    /**
     * @return boolean
     */
    public function isDefiningStatusable();

    /**
     * @param boolean $alwaysShared
     */
    public function setAlwaysShared($alwaysShared);

    /**
     * @return boolean
     */
    public function isAlwaysShared();
}
