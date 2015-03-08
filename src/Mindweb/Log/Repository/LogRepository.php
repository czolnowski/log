<?php
namespace Mindweb\Log\Repository;

interface LogRepository
{
    /**
     * @param int $id
     */
    public function markAsProcessed($id);

    /**
     * @param int $limit
     * @return array
     */
    public function fetchAllForLimit($limit);

    /**
     * @param string $actionTime
     * @param array $values
     */
    public function insert($actionTime, $values);
} 