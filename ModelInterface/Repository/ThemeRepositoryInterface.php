<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface ThemeRepositoryInterface
 */
interface ThemeRepositoryInterface extends PaginateRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();
}
