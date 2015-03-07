<?php
namespace Mindweb\Log\Repository;

use Mindweb\Config\AbstractRepositoryFactory;

class Factory extends AbstractRepositoryFactory
{
    /**
     * @return string
     */
    protected function getNamespace()
    {
        return 'Log';
    }

    /**
     * @return array
     */
    protected function getMapping()
    {
        return array(
            'log' => 'Log'
        );
    }
}