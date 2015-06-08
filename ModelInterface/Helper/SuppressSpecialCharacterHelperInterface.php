<?php

namespace OpenOrchestra\ModelInterface\Helper;

/**
 * Class SuppressSpecialCharacterHelperInterface
 *
 */
interface SuppressSpecialCharacterHelperInterface
{
    /**
     * @param string $input
     * @param array  $authorizeSpecial
     *
     * @return string
     */
    public function transform($input, $authorizeSpecial = array());
}
