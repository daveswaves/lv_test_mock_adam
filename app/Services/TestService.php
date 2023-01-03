<?php

namespace App\Services;

class TestService
{
    public function getTotal(int $val): int
    {
        return $val + 10;
    }
}