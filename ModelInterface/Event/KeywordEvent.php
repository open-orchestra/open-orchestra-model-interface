<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\KeywordInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class KeywordEvent
 */
class KeywordEvent extends Event
{
    protected $keyword;

    /**
     * @param KeywordInterface $keyword
     */
    public function __construct(KeywordInterface $keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return KeywordInterface
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
}
