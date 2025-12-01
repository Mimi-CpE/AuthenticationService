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
        throw new \Exception('Not implemented');
    }

    public function show(string $ulid, array $withs = [])
    {
        throw new \Exception('Not implemented');
    }
}
