<?php

namespace App\Services;

class TestService
{
    public function __construct(private ValueService $valueService) {}
    
    public function getTotal(int $val): int
    {
        return $val + $this->valueService->getValue();
    }
}