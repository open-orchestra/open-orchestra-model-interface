<?php

namespace OpenOrchestra\ModelInterface\Repository\Configuration;

/**
 * Class PaginateFinderConfiguration
 */
class PaginateFinderConfiguration extends FinderConfiguration
{
    protected $order = null;
    protected $skip = null;
    protected $limit = null;

    /**
     * @return array order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param null|array $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return int skip
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * @param int $skip
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
    }

    /**
     * @return int limit
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return FinderConfiguration
     */
    public function getFinderConfiguration()
    {
        return FinderConfiguration::generateFinderConfiguration(
            $this->getDescriptionEntity(),
            $this->getColumns(),
            $this->getSearch()
        );
    }
}
