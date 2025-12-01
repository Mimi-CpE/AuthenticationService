<?php

namespace App\Services\Auth;

use App\Models\User;

interface AuthServiceInterface
{
    public function respondWithToken(string $token, ?User $user);
    public function login(array $params);
    public function logout();
}
