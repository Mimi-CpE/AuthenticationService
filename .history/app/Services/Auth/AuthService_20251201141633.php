<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepositoryInterface;

class AuthService implements AuthServiceInterface
{
    private UserRepositoryInterface $userRepo;

    public function __construct(
        UserRepositoryInterface $userRepo
    ) {
        $this->userRepo = $userRepo;
    }

    protected function respondWithToken($token) {}

    public function login(array $params)
    {
        $email = $params['email'];
        $password = $params['password'];

        $user = $this->userRepo->getUserByEmail($email);

        if ($user && Hash::check($password, $user->password)) {
            $token = Auth::guard('api')->login($user);
            return $this->respondWithToken($token);
        }

        return response()->json([
            'error' => 'Unauthorized'
        ], 401);
    }

    public function logout()
    {
        throw new \Exception('Not implemented');
    }
}
