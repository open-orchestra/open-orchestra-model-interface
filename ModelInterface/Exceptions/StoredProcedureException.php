<?php

namespace OpenOrchestra\ModelInterface\Exceptions;

/**
 * Class StoredProcedureException
 */

class StoredProcedureException extends \Exception
{
    /**
     * @param string $name
     * @param string $parameter
     */
    public function __construct($name = "", $parameter = "")
    {
        parent::__construct(
            sprintf('Stored procedure Error : unable to terminate %s stored procedure with %s as parameter.', $name, $parameter)
        );
    }
}
