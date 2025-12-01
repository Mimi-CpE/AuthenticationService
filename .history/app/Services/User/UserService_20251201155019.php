<?php

namespace App\Services\User;

use App\Services\Auth\AuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private AuthService $authService;
    private UserRepositoryInterface $userRepo;

    public function __construct(
        AuthService $authService,
        UserRepositoryInterface $userRepo,
    ) {
        $this->authService = $authService;
        $this->userRepo = $userRepo;
    }

    public function store(array $params)
    {
        try {
            DB::beginTransaction();

            $userData = [
                'name' => $params['name'],
                'email' => $params['email'],
                'password' => Hash::make($params['password']),
                'role_id' => $params['role_id']
            ];

            $user = $this->userRepo->store($userData);
            $token = Auth::guard('api')->login($user);

            DB::commit();

            return $this->authService->respondWithToken($token, $user);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json([
                'message' => 'User creation error.'
            ], 500);
        }
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
