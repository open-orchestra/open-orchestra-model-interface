<?php

namespace OpenOrchestra\ModelInterface\Repository;

/**
 * Interface FieldAutoGenerableRepositoryInterface
 */
interface FieldAutoGenerableRepositoryInterface
{
    /**
     * @param string $name
     */
    public function testUnicityInContext($name);

}
