<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    /**
     * @test
     */
    public function admin_can_access_all_controller_functions()
    {
        $user = factory(User::class)->create();

        $this->get(route('user.index'))->assertStatus(200);
        $this->post(route('user.store'))->assertStatus(200);
        $this->get(route('user.create'))->assertStatus(200);
        $this->get(route('user.show', [$user->id]))->assertStatus(200);
        $this->put(route('user.update', [$user->id]))->assertStatus(200);
        $this->get(route('user.edit', [$user->id]))->assertStatus(200);
        $this->delete(route('user.destroy' , [$user->id]))->assertStatus(200);
    }


    /**
     * @test
     */
    public function default_user_can_access_show_update_edit_controller_functions()
    {
        $user = factory(User::class)->create();

        $this->get(route('user.show', [$user->id]))->assertStatus(200);
        $this->put(route('user.update', [$user->id]))->assertStatus(200);
        $this->get(route('user.edit', [$user->id]))->assertStatus(200);
    }

    /**
     * @test
     */
    public function default_user_cant_access_index_store_create_destroy_controller_functions()
    {
        $user = factory(User::class)->create();

        $this->get(route('user.index'))->assertStatus(404);
        $this->post(route('user.store'))->assertStatus(404);
        $this->get(route('user.create'))->assertStatus(404);
        $this->delete(route('user.destroy' , [$user->id]))->assertStatus(404);
    }

    /**
     * @test
     */
    public function index_show_index()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function admin_can_create_user(){

        $this->withMiddleware();

        $this->actingAs($this->admin);

        $this->assertTrue(true);

    }
}
