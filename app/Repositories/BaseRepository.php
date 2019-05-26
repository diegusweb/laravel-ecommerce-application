<?php

namespace App\Repositories;
use App\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 *
 * @package \App\Repositories
 */
class BaseRepository implements BaseContract
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * Create a model instance
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    /**
     * Update a model instance
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * Return all model rows
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc')
    {
        // TODO: Implement all() method.
    }

    /**
     * Find one by ID
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    /**
     * Find one by ID or throw exception
     * @param int $id
     * @return mixed
     */
    public function findOneOrFail(int $id)
    {
        // TODO: Implement findOneOrFail() method.
    }

    /**
     * Find based on a different column
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data)
    {
        // TODO: Implement findBy() method.
    }

    /**
     * Find one based on a different column
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data)
    {
        // TODO: Implement findOneBy() method.
    }

    /**
     * Find one based on a different column or through exception
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data)
    {
        // TODO: Implement findOneByOrFail() method.
    }

    /**
     * Delete one by Id
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}