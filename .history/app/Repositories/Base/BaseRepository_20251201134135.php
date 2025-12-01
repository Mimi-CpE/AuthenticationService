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
            return $q->get();
        }

        $q = $q->orderBy($order_by, $order_direction);
    }

    public function show(string $ulid, array $withs = [])
    {
        throw new \Exception('Not implemented');
    }

    public function store(array $params = [])
    {
        throw new \Exception('Not implemented');
    }

    public function update(string $ulid, array $params)
    {
        throw new \Exception('Not implemented');
    }

    public function delete(string $ulid)
    {
        throw new \Exception('Not implemented');
    }

    public function restore(string $ulid)
    {
        throw new \Exception('Not implemented');
    }
}
