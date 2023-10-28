<?php

namespace App\Services\User;

use LaravelEasyRepository\BaseService;

interface UserService extends BaseService
{
    /**
     * Get a collection of users from the database.
     *
     * @param int|null $limit      The maximum number of records to return.
     * @param bool     $useGet     Whether to execute the query immediately using the 'get' method.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getUsers($limit = null, $useGet = true);
}
