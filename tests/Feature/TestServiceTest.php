<?php

namespace Tests\Feature;

use Tests\TestCase;
use Mockery\MockInterface;
use App\Services\ValueService;
use App\Services\TestService;

class TestServiceTest extends TestCase
{
    public function test_correct_total_returned()
    {
        $this->mock(ValueService::class, function(MockInterface $mock) {
            $mock->expects('getValue')
                ->andReturn(5);
        });
        
        $service = app(TestService::class);

        $result = $service->getTotal(5);

        $this->assertEquals(10, $result);
    }
}