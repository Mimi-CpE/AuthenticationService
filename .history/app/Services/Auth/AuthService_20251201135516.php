<?php

namespace App\Services\Auth;

use App\Repositories\User\UserRepositoryInterface;

class AuthService implements AuthServiceInterface
{
    private UserRepositoryInterface $userRepo;

    public function login(array $params)
    {
        throw new \Exception('Not implemented');
    }

    public function logout()
    {
        throw new \Exception('Not implemented');
    }
}
