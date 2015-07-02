<?php

namespace OpenOrchestra\ModelInterface\Repository\Configuration;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class PaginateFinderConfiguration
 */
class PaginateFinderConfiguration extends FinderConfiguration
{
    protected $order = null;
    protected $skip = null;
    protected $limit = null;

    /**
     * @param Request $request
     *
     * @return PaginateFinderConfiguration
     */
    public static function generateFromRequest(Request $request)
    {
        $finderConfig = new PaginateFinderConfiguration();
        $columns = $request->get('columns');
        if(PaginateFinderConfiguration::isArrayOrNull($columns)){
            $finderConfig->setColumns($columns);
        }
        $finderConfig->setSearch($request->get('search'));
        $finderConfig->setLimit($request->get('limit'));
        $order = $request->get('order');
        if(PaginateFinderConfiguration::isArrayOrNull($order)){
            $finderConfig->setOrder($order);
        }
        $finderConfig->setSkip($request->get('skip'));

        return $finderConfig;
    }

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
        $this->skip = $this->getIntOrNull($skip);
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
        $this->limit = $this->getIntOrNull($limit);
    }

    protected function getIntOrNull($value) {
        return $value === NULL ? NULL : (int) $value;
    }
}
