<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\TestService;

class TestServiceTest extends TestCase
{
    public function test_correct_total_returned()
    {
        $service = app(TestService::class);

        $result = $service->getTotal(5);

        $this->assertEquals(15, $result);
    }
}