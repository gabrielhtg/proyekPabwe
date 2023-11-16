<?php

namespace Tests\Feature;

use App\Services\AdminService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminServiceTest extends TestCase
{
    private AdminService $adminService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminService = $this->app->make(AdminService::class);
    }

    public function testSample()
    {
        self::assertTrue(true);
    }


}
