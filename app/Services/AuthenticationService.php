<?php

namespace App\Services;

use App\DTOs\Auth\LoginDTO;
use App\Exceptions\BadCredentialsException;
use Illuminate\Support\Facades\Hash;

class AuthenticationService
{
    public function __construct(private UserService $userService) {}

    public function login(LoginDTO $loginDTO)
    {
        $user = $this->userService->getUserByEmail($loginDTO->email);

        if (!$user || !$this->checkPassword($loginDTO->password, $user->password)) {
            throw new BadCredentialsException();
        }

        return $user->createToken('vgl-api')->plainTextToken;
    }

    private function checkPassword(string $plainTextPassword, string $hashedPassword)
    {
        return Hash::check($plainTextPassword, $hashedPassword);
    }
}
