<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    public function list(array $params);

    public function store(array $params = []);

    public function update(array $params, string $id);

    public function show(string $id, array $withs = []);

    public function delete(string $id);

    public function count();

    public function restore(string $id);
}
