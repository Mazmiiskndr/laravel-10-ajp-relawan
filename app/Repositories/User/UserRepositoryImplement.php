<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;

class UserRepositoryImplement extends Eloquent implements UserRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->userModel variable name
     * @property User|mixed $userModel;
     */
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    /**
     * Get a collection of users from the database.
     *
     * @param int|null $limit  The maximum number of records to return.
     * @param bool     $useGet Whether to execute the query immediately using the 'get' method.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getUsers($limit = null, $useGet = true)
    {
        $query = $this->userModel->latest();

        return $useGet ?
            $query->when($limit, function ($q, $limit) {
                return $q->limit($limit);
            })->get() :
            $query;
    }
}
