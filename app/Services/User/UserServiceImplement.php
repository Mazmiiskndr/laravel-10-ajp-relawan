<?php

namespace App\Services\User;

use LaravelEasyRepository\Service;
use App\Repositories\User\UserRepository;
use App\Traits\HandleRepositoryCall;

class UserServiceImplement extends Service implements UserService
{

    use HandleRepositoryCall;
    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    /**
     * Get a collection of users from the database.
     *
     * @param int|null $limit      The maximum number of records to return.
     * @param bool     $useGet     Whether to execute the query immediately using the 'get' method.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getUsers($limit = null, $useGet = true)
    {
        return $this->handleRepositoryCall('getUsers', [$limit, $useGet]);
    }
}
