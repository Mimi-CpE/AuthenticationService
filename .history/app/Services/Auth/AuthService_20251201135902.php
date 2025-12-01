<?php

namespace App\Services\Auth;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

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

        if ($user && Hash::check($password, $user->password)) {
        }

        return response()->json([], 401);
    }

    public function logout()
    {
        throw new \Exception('Not implemented');
    }
}
