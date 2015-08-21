<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface TrashCanInterface
 */
interface TrashCanInterface
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
    public function getDeleteAt();

    /**
     * @param string $deleteAt
     */
    public function setDeleteAt($deleteAt);

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
}
