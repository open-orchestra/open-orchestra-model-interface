<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface PaginateRepositoryInterface
 */
interface PaginateRepositoryInterface
{
    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @return array
     */
    public function findForPaginateAndSearch($descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

    /**
     * @param array|null $columns
     * @param array|null $descriptionEntity
     * @param array|null $search
     *
     * @return int
     */
    public function countFilterSearch($descriptionEntity = null, $columns = null, $search = null);

    /**
     * @return int
     */
    public function count();
}
