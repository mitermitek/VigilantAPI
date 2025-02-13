<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\LoginRequest;
use App\Services\AuthenticationService;
use App\DTOs\Auth\LoginDTO;
use App\Http\Resources\API\Auth\UserTokenResource;

class LoginController extends Controller
{
    public function __construct(private AuthenticationService $authenticationService) {}

    public function __invoke(LoginRequest $request)
    {
        $loginDTO = LoginDTO::from($request->validated());
        $token = $this->authenticationService->login($loginDTO);

        return new UserTokenResource([
            'token' => $token
        ]);
    }
}
