<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository
{
    /**
     * Get a collection of users from the database.
     *
     * @param int|null $limit      The maximum number of records to return.
     * @param bool     $useGet     Whether to execute the query immediately using the 'get' method.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getUsers($limit, $useGet);
}
