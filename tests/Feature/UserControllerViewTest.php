<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerViewTest extends TestCase
{
    /**
     * @test
     */
    public function admin_can_see_user_index()
    {
       $this->assertTrue(true);
    }
}
