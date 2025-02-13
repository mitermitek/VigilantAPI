<?php

namespace App\DTOs\Auth;

use Spatie\LaravelData\Data;

class UserLoggedInDTO extends Data
{
    public function __construct(
        public string $token,
    ) {}
}
