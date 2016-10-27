<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface BlockRepositoryInterface
 */
interface BlockRepositoryInterface
{
    /**
     * @param string $id
     *
     * @return null|\OpenOrchestra\ModelInterface\Model\ReadBlockInterface
     */
    public function findById($id);

    /**
     * @return array
     */
    public function findTransverse();
}
