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
     * @param HistoryInterface $history
     */
    public function addHistory(HistoryInterface $history);
}
