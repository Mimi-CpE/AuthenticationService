<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    public function list(array $params);

    public function store(array $params = []);

    public function update(string $ulid, array $params);

    public function show(string $ulid, array $withs = []);

    public function delete(string $id);

    public function count();

    public function restore(string $id);
}
