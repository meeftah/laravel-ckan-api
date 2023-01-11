<?php

namespace Germanazo\CkanApi\Repositories;

class GroupRepository extends BaseRepository
{
    protected $action_name = 'group';

    /**
     * @param array $data
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.group_list
     *
     * @return array
     */
    public function all($data = [])
    {
        return parent::list($data);
    }
}