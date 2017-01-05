<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\StatusInterface;
use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;

/**
 * Interface StatusRepositoryInterface
 */
interface StatusRepositoryInterface
{
    /**
     * @return array
     */
    public function findNotOutOfWorkflow();

    /**
     * @return StatusInterface
     */
    public function findOneByInitial();

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findOtherByInitial($name);

    /**
     * @return StatusInterface
     */
    public function findOneByPublished();

    /**
     * @return array
     */
    public function findByAutoPublishFrom();

    /**
     * @return StatusInterface
     */
    public function findOneByAutoUnpublishTo();

    /**
     * @param string $name
     *
     * @return array
     */
    public function findOtherByAutoUnpublishTo($name);

    /**
     * @param string $id
     *
     * @return StatusInterface
     */
    public function find($id);

    /**
     * @return StatusInterface
     */
    public function findOneByEditable();

    /**
     * @return StatusInterface
     */
    public function findOneByOutOfWorkflow();

    /**
     * @param string $name
     *
     * @return array
     */
    public function findOtherByTranslationState($name);

    /**
     * @return StatusInterface
     */
    public function findOneByTranslationState();

    /**
     * @return array The objects.
     */
    public function findAll();

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return int
     */
    public function countWithFilter(PaginateFinderConfiguration $configuration);

    /**
     * @param array $statusIds
     *
     * @throws \Exception
     */
    public function removeStatuses(array $statusIds);
}
