<?php

namespace App\Services\User;

use Illuminate\Support\Facades\DB;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Auth\AuthService;

class UserService extends AuthService implements UserServiceInterface
{
    private UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function store(array $params)
    {
        try {
            DB::beginTransaction();
            // DB::commit();
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
