<?php

namespace OpenOrchestra\ModelInterface\Event;

use OpenOrchestra\ModelInterface\Model\ThemeInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class ThemeEvent
 */
class ThemeEvent extends Event
{
    protected $theme;
    protected $oldTheme;

    /**
     * @param ThemeInterface      $theme
     * @param ThemeInterface|null $oldTheme
     */
    public function __construct(ThemeInterface $theme, ThemeInterface $oldTheme = null)
    {
        $this->theme = $theme;
        $this->oldTheme = $oldTheme;
    }

    /**
     * @return ThemeInterface
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @return ThemeInterface
     */
    public function getOldTheme()
    {
        return $this->oldTheme;
    }
}
