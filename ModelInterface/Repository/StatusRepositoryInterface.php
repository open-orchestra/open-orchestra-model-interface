<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;

/**
 * Interface StatusRepositoryInterface
 */
interface StatusRepositoryInterface extends PaginateRepositoryInterface
{
    /**
     * @return StatusInterface
     */
    public function findOneByInitial();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findOtherByInitial($name);

    /**
     * @param string $id
     *
     * @return StatusInterface
     */
    public function find($id);

    /**
     * @return StatusInterface
     */
    public function findOneByEditable();
}
