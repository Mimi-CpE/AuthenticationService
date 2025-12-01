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
        $email = $params['email'];
        $password = $params['password'];

        $user = $this->userRepo->getUserByEmail($email);
    }

    public function logout()
    {
        throw new \Exception('Not implemented');
    }
}
