<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\RedirectionInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface RedirectionRepositoryInterface
 */
interface RedirectionRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @param string $id
     *
     * @return RedirectionInterface
     */
    public function find($id);
}
