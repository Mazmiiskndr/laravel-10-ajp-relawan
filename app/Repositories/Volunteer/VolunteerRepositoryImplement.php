<?php

namespace App\Repositories\Volunteer;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Log;

class VolunteerRepositoryImplement extends Eloquent implements VolunteerRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Volunteer|mixed $volunteerModel;
     */
    protected $volunteerModel;

    public function __construct(Volunteer $volunteerModel)
    {
        $this->volunteerModel = $volunteerModel;
    }

    /**
     * Get a collection of volunteers from the database.
     *
     * @param int|null $limit      The maximum number of records to return.
     * @param bool     $useGet     Whether to execute the query immediately using the 'get' method.
     * @param array    $relations  An array of relationships to eager-load.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
     */
    public function getVolunteers($limit = null, $useGet = true, $relations = [])
    {
        $query = $this->volunteerModel->with($relations)->latest();

        return $useGet ?
            $query->when($limit, function ($q, $limit) {
                return $q->limit($limit);
            })->get() :
            $query;
    }



    /**
     * Get a volunteer by their ID.
     *
     * @param int $id  The ID of the volunteer to retrieve.
     * @param array $relations An array of relationships to eager-load.
     */
    public function getById($id, $relations = [])
    {
        return $this->volunteerModel->with($relations)->find($id);
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
        return $this->volunteerModel
            ->with($relations)
            ->where(function ($query) use ($searchQuery, $columns) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'LIKE', "%{$searchQuery}%");
                }
            })
            ->get();
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
        if ($id) {
            $volunteer = $this->volunteerModel->find($id);
            if ($volunteer) {
                $volunteer->update($attributes);
                return $volunteer;
            }
        }

        return $this->volunteerModel->create($attributes);
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
        try {
            $volunteer = $this->volunteerModel->find($id);
            if ($volunteer) {
                $volunteer->delete();
            }
            return true;
        } catch (\Exception $e) {
            // Log the error message and rethrow the exception
            Log::error("Error: " . $e->getMessage());
            throw $e;
        }
    }
}
