<?php

namespace App\Services\User;

interface UserServiceInterface
{
    public function store(array $params);
    public function update(string $ulid, array $params);
    public function delete(string $ulid);
    public function restore(string $ulid);
}
