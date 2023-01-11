<?php

namespace Germanazo\CkanApi\Repositories;

class UserRepository extends BaseRepository
{
    protected $action_name = 'user';

    /**
     * Return alist of users
     *
     * @link http://docs.ckan.org/en/latest/api/#ckan.logic.action.get.user_list
     * @param array $data
     */
    public function all(array $data = [])
    {
        return parent::list($data);
    }
}