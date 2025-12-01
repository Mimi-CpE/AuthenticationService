<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private UserRepositoryInterface $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function store(array $params)
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
