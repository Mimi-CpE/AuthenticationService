<?php

namespace App\Services\Auth;

use App\Repositories\User\UserRepositoryInterface;

class AuthService implements AuthServiceInterface
{
    private UserRepositoryInterface $userRepo;
}
