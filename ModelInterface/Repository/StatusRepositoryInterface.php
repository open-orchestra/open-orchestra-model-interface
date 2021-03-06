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
     * @param string $id
     *
     * @return StatusInterface
     */
     public function findOneById($id);

    /**
     * @parameter array $order
     *
     * @return array
     */
    public function findNotOutOfWorkflow(array $order);

    /**
     * @return StatusInterface
     */
    public function findOneByInitial();

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
     * @param string $id
     *
     * @return StatusInterface
     */
    public function find($id);

    /**
     * @return StatusInterface
     */
    public function findOneByOutOfWorkflow();

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
    public function countNotOutOfWorkflow();

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
