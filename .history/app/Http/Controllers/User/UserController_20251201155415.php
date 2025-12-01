<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepo;
    private UserServiceInterface $userService;

    public function __construct(
        UserRepositoryInterface $userRepo,
        UserServiceInterface $userService,
    ) {
        $this->userRepo = $userRepo;
        $this->userService = $userService;
    }

    public function store(UserStoreRequest $request)
    {
        return $this->userService->store($request->all());
    }
}
