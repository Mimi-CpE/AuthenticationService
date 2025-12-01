<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    private Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function list(array $params)
    {
        $withs = $params['withs'] ?? [];
        $per_page = $params['per_page'] ?? 10;
        $order_by = $params['order_by'] ?? 'id';
        $order_direction = $params['order_direction'] ?? 'desc';

        $q = $this->model;

        if (isset($params['is_all']) && $params['is_all'] === true) {
            return $q->with($withs)->get();
        }

        $q = $q->orderBy($order_by, $order_direction);
        return $q->with($withs)->paginate($per_page);
    }

    public function show(string $ulid, array $withs = [])
    {
        return $this->model->with($withs)->findOrFail($ulid);
    }

    public function store(array $params = [])
    {
        return $this->model->create($params);
    }

    public function update(string $ulid, array $params)
    {
        $model = $this->model->findOrFail($ulid);
        $model->update($params);

        return $this->model->findOrFail($ulid);
    }

    public function delete(string $ulid)
    {
        return $this->model->findOrFail($ulid)->delete();
    }

    public function restore(string $ulid)
    {
        return $this->model->onlyTrashed()->findOrFail($ulid)->restore();
    }
}
