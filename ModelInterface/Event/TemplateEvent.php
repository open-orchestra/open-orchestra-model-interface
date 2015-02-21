<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\TemplateInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class TemplateEvent
 */
class TemplateEvent extends Event
{
    protected $template;

    /**
     * @param TemplateInterface $template
     */
    public function __construct(TemplateInterface $template)
    {
        $this->template = $template;
    }

    /**
     * @return TemplateInterface
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
