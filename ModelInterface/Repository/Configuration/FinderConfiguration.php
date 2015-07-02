<?php

namespace OpenOrchestra\ModelInterface\Repository\Configuration;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class FinderConfiguration
 */
class FinderConfiguration
{
    protected $descriptionEntity = null;
    protected $columns = null;
    protected $search = null;

    /**
     * @param Request $request
     *
     * @return FinderConfiguration
     */
    public static function generateFromRequest(Request $request)
    {
        $finderConfig = new FinderConfiguration();
        $columns = $request->get('columns');
        if(FinderConfiguration::isArrayOrNull($columns))
            $finderConfig->setColumns($columns);
        $finderConfig->setSearch($request->get('search'));

        return $finderConfig;
    }

    /**
     * @param string $value
     *
     * @return boolean
     */
    public static function isArrayOrNull($value)
    {
        return  is_array($value) || $value === NULL;
    }

    /**
     * @return array descriptionEntity
     */
    public function getDescriptionEntity()
    {
        return $this->descriptionEntity;
    }

    /**
     * @param null|array $descriptionEntity
     */
    public function setDescriptionEntity($descriptionEntity)
    {
        $this->descriptionEntity = $descriptionEntity;
    }

    /**
     * @return array columns
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param null|array $columns
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    /**
     * @return string search
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param string $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }
}
