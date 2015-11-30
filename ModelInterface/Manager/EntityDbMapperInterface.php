<?php

namespace OpenOrchestra\ModelInterface\Manager;

/**
 * Class EntityDbMapperInterface
 */
interface EntityDbMapperInterface
{
    /**
     * Take a embed document array representation to return entity
     *
     * @param array $data
     *
     * @return string
     */
    public function fromDbToEntity(array $data);

    /**
     * Take a id to turn it into a embed document array representation
     *
     * @param mixed $document
     *
     * @return array
     */
    public function fromEntityToDb($document);
}
