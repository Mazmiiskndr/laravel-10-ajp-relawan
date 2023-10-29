<?php

namespace App\Services\Volunteer;

use App\Traits\HandleRepositoryCall;
use LaravelEasyRepository\Service;
use App\Repositories\Volunteer\VolunteerRepository;

class VolunteerServiceImplement extends Service implements VolunteerService
{
    use HandleRepositoryCall;
    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(VolunteerRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    /**
     * Get a collection of volunteers from the database.
     *
     * @param array|string $columns   The columns to select from the database table.
     * @param int|null     $limit     The maximum number of records to return.
     * @param bool         $useGet    Whether to execute the query immediately using the 'get' method.
     * @param array        $relations An array of relationships to eager-load.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getVolunteers($columns = ['*'], $limit = null, $useGet = true, $relations = [])
    {
        return $this->handleRepositoryCall('getVolunteers', [$columns, $limit, $useGet, $relations]);
    }

    /**
     * Get the data formatted for DataTables.
     */
    public function getDatatables()
    {
        return $this->handleRepositoryCall('getDatatables');
    }

    /**
     * Get a volunteer by their ID.
     *
     * @param int $id  The ID of the volunteer to retrieve.
     * @param array $relations An array of relationships to eager-load.
     */
    public function getById($id, $relations = [])
    {
        return $this->handleRepositoryCall('getById', [$id, $relations]);
    }

    /**
     * Search for volunteers based on a query string.
     *
     * @param string $searchQuery  The search query string.
     * @param array  $columns      The database columns to search in.
     * @param array  $relations    An array of relationships to eager-load.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($searchQuery, $columns = ['name'], $relations = [])
    {
        return $this->handleRepositoryCall('search', [$searchQuery, $columns, $relations]);
    }

    /**
     * Create or update a record in the database.
     *
     * @param array $attributes
     * @param mixed $id
     * @return mixed|null
     */
    public function createOrUpdate(array $attributes, $id = null)
    {
        return $this->handleRepositoryCall('createOrUpdate', [$attributes, $id]);
    }

    /**
     * Delete a volunteer by their ID.
     *
     * @param int $id  The ID of the volunteer to delete.
     *
     * @return bool
     */
    public function delete($id)
    {
        return $this->handleRepositoryCall('delete', [$id]);
    }
}
