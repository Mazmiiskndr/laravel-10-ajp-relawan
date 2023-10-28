<?php

namespace App\Services\Volunteer;

use LaravelEasyRepository\BaseService;

interface VolunteerService extends BaseService
{
    /**
     * Get a collection of volunteers from the database.
     *
     * @param int|null $limit      The maximum number of records to return.
     * @param bool     $useGet     Whether to execute the query immediately using the 'get' method.
     * @param array    $relations  An array of relationships to eager-load.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getVolunteers($limit = null, $useGet = true, $relations = []);

    /**
     * Get a volunteer by their ID.
     *
     * @param int $id  The ID of the volunteer to retrieve.
     * @param array $relations An array of relationships to eager-load.
     */
    public function getById($id, $relations = []);

    /**
     * Search for volunteers based on a query string.
     *
     * @param string $searchQuery  The search query string.
     * @param array  $columns      The database columns to search in.
     * @param array  $relations    An array of relationships to eager-load.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($searchQuery, $columns = ['name'], $relations = []);

    /**
     * Create or update a record in the database.
     *
     * @param array $attributes
     * @param mixed $id
     * @return mixed|null
     */
    public function createOrUpdate(array $attributes, $id = null);

    /**
     * Delete a volunteer by their ID.
     *
     * @param int $id  The ID of the volunteer to delete.
     *
     * @return bool
     */
    public function delete($id);
}
