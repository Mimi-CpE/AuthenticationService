<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Base\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function getUserByEmail(string $email): ?User;
}
