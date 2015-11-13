<?php

namespace OpenOrchestra\ModelInterface\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class AbstractSiteThemeChoiceType
 */
abstract class AbstractSiteThemeChoiceType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'oo_site_theme_choice';
    }
}
