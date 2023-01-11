<?php

namespace Germanazo\CkanApi\Repositories;

use Germanazo\CkanApi\Exceptions\MethodNotImplementedException;

/**
 * Class DatasetRepository
 * @package Germanazo\CkanApi\Repositories
 */
class DatasetRepository extends BaseRepository
{
    protected $action_name = 'package';

    /**
     * @param array $data
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.package_search
     *
     * @return array
     */
    public function all($data = [])
    {
        return parent::search($data);
    }

    /**
     * Return a dataset (package)’s revisions as a list of dictionaries.
     *
     * @param string $id
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.package_revision_list
     *
     * @return array
     */
    public function revision_list($id)
    {
        return $this->query(__FUNCTION__, ['id' => $id]);
    }
}