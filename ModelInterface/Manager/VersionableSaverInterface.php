<?php

namespace OpenOrchestra\ModelInterface\Manager;

use OpenOrchestra\ModelInterface\Saver\VersionableSaverInterface as NewVersionableSaver;

/**
 * Class VersionableSaverInterface
 *
 * @deprecated use Saver\VersionableSaverInterface instead, will be removed in 1.2.0
 */
interface VersionableSaverInterface extends NewVersionableSaver
{
}
