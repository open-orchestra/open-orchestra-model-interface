<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\KeywordInterface;

/**
 * Interface KeywordRepositoryInterface
 */
interface KeywordRepositoryInterface extends PaginateRepositoryInterface
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
