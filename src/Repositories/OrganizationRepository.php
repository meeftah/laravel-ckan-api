<?php

namespace Germanazo\CkanApi\Repositories;

class OrganizationRepository extends BaseRepository
{
    protected $action_name = 'organization';

    /**
     * @param array $data
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.organization_list
     *
     * @return array
     */
    public function all($data = [])
    {
        return parent::list($data);
    }
}