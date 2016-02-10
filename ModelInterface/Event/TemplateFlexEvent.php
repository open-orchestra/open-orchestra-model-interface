<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\TemplateFlexInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class TemplateFlexEvent
 */
class TemplateFlexEvent extends Event
{
    protected $template;

    /**
     * @param TemplateFlexInterface $template
     */
    public function __construct(TemplateFlexInterface $template)
    {
        $this->template = $template;
    }

    /**
     * @return TemplateFlexInterface
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
