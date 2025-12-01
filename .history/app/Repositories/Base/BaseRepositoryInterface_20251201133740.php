<?php

namespace App\Repositories\Base;

interface BaseRepositoryInterface
{
    public function list(array $params);

    public function show(string $ulid, array $withs = []);

    public function store(array $params = []);

    public function update(string $ulid, array $params);

    public function delete(string $ulid);

    public function restore(string $ulid);
}
