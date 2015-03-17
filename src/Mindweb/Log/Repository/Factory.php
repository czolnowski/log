<?php
namespace Mindweb\Log\Repository;

use Mindweb\Db\AbstractRepositoryFactory;

class Factory extends AbstractRepositoryFactory
{
    /**
     * @return string
     */
    protected function getNamespace()
    {
        return sprintf('Log%s', ucfirst($this->connection->getType()));
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

    /**
     * @return string
     */
    protected function getVendor()
    {
        return 'Mindweb';
    }
}