<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TrashItemInterface
 */
interface TrashItemInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getDeletedAt();

    /**
     * @param string $deletedAt
     */
    public function setDeletedAt($deletedAt);

    /**
     * @return mixed
     */
    public function getEntityId();

    /**
     * @param string $entityId
     */
    public function setEntityId($entityId);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);
}
