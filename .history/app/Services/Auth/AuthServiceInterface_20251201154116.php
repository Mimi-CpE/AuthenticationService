<?php

namespace App\Services\Auth;

interface AuthServiceInterface
{
    public function respondWithToken($token, $user);
    public function login(array $params);
    public function logout();
}
