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
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getPattern();

    /**
     * @param string $pattern
     */
    public function setPattern($pattern);

    /**
     * @return array
     */
    public function getDefaults();

    /**
     * @param array $defaults
     */
    public function setDefaults(array $defaults);

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
     * @param string $host
     */
    public function setHost($host);

    /**
     * @return array|string
     */
    public function getSchemes();

    /**
     * @param array|string $schemes
     */
    public function setSchemes($schemes);

    /**
     * @return array|string
     */
    public function getMethods();

    /**
     * @return string
     */
    public function getCondition();

    /**
     * @return string
     */
    public function getNodeId();

    /**
     * @param string $nodeId
     */
    public function setNodeId($nodeId);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @param string $language
     */
    public function setLanguage($language);

    /**
     * @return string
     */
    public function getSiteId();

    /**
     * @param string $siteId
     */
    public function setSiteId($siteId);

    /**
     * @return string
     */
    public function getAliasId();

    /**
     * @param string $aliasId
     */
    public function setAliasId($aliasId);
}
