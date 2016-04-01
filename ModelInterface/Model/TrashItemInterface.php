<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TrashItemInterface
 */
interface TrashItemInterface
{
    const TYPE_NODE = 'node';
    const TYPE_CONTENT = 'content';

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
    public function getEntity();

    /**
     * @param mixed $entity
     */
    public function setEntity($entity);

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
}
