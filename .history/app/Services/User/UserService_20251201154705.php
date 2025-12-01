<?php

namespace App\Services\User;

use Illuminate\Support\Facades\DB;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Auth\AuthService;

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
            $user_data = [
                'name' => $params['name']
            ];
            // DB::commit();
            // return $this->authService->respondWithToken();
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
