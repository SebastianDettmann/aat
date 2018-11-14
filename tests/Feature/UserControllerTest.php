<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_show_index()
    {
        $this->assertTrue(true);
    }
}
