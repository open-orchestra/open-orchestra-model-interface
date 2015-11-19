<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface ThemeRepositoryInterface
 */
interface ThemeRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();
}
