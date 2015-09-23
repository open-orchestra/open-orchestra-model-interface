<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * interface RouteDocumentInterface
 */
interface RouteDocumentInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getPattern();

    /**
     * @return array
     */
    public function getDefaults();

    /**
     * @return array
     */
    public function getRequirements();

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @return string
     */
    public function getHost();

    /**
     * @return array|string
     */
    public function getSchemes();

    /**
     * @return array|string
     */
    public function getMethods();

    /**
     * @return string
     */
    public function getCondition();
}
