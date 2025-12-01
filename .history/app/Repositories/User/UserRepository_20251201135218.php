<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Base\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    private User $model;
    public function __construct(User $model)
    {
        $this->model = $model;
        parent::__construct($this->model);
    }
}
