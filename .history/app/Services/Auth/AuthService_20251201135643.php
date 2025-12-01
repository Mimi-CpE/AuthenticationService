<?php

namespace App\Services\Auth;

use App\Repositories\User\UserRepositoryInterface;

class AuthService implements AuthServiceInterface
{
    private UserRepositoryInterface $userRepo;

    public function __construct(
        UserRepositoryInterface $userRepo
    ) {
        $this->userRepo = $userRepo;
    }

    public function login(array $params)
    {
        $user = $this->userRepo->getUserByEmail($params['email']);
    }

    public function logout()
    {
        throw new \Exception('Not implemented');
    }
}
