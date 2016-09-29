<?php


namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface HistorisableInterface
 */
interface HistorisableInterface
{
    /**
     * Add history
     *
     * @param HistoryInterface $hiistory
     */
    public function addHistory(HistoryInterface $history);
}
