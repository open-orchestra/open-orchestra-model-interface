<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\KeywordInterface;
use OpenOrchestra\Pagination\Configuration\PaginationRepositoryInterface;

/**
 * Interface KeywordRepositoryInterface
 */
interface KeywordRepositoryInterface extends PaginationRepositoryInterface
{
    /**
     * @return array
     */
    public function findAll();

    /**
     * @return mixed
     */
    public function getManager();

    /**
     * @param string $label
     *
     * @return KeywordInterface
     */
    public function findOneByLabel($label);
}
