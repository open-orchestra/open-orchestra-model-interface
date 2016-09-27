<?php


namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReportableInterface
 */
interface ReportableInterface
{
    /**
     * Add report
     *
     * @param ReportInterface $report
     */
    public function addReport(ReportInterface $report);
}
