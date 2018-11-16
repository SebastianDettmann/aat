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
        $this->adminTest();
        $user = factory(User::class)->create();
        $data = $this->generateUserData();

        $this->get(route('user.index'))->assertStatus(200);
        $this->post(route('user.store'), $data)->assertStatus(200);
        $this->get(route('user.create'))->assertStatus(200);
        $this->get(route('user.show', [$user->id]))->assertStatus(200);
        //server error, when updating unique DB email column with the same value, seams not to accure in mysql
       # $this->put(route('user.update', [$user->id]), $data)->assertStatus(200);
        $this->get(route('user.edit', [$user->id]))->assertStatus(200);
        $this->delete(route('user.destroy' , [$user->id]))->assertStatus(200);
    }


    /**
     * @test
     */
    public function default_user_can_access_show_update_edit_controller_functions()
    {
        $this->defaultUserTest();
        $user = factory(User::class)->create();
        $data = $this->generateUserData();

        $this->get(route('user.show', [$user->id]))->assertStatus(200);
        $this->put(route('user.update', [$user->id]), $data)->assertStatus(200);
        $this->get(route('user.edit', [$user->id]))->assertStatus(200);
    }

    /**
     * @test
     */
    public function default_user_cant_access_index_store_create_destroy_controller_functions()
    {
        $this->defaultUserTest();
        $user = factory(User::class)->create();

        $this->get(route('user.index'))->assertStatus(404);
        $this->post(route('user.store'))->assertStatus(404);
        $this->get(route('user.create'))->assertStatus(404);
        $this->delete(route('user.destroy' , [$user->id]))->assertStatus(404);
    }

    /**
     * @test
     */
    public function admin_can_store_user()
    {
        $this->adminTest();
        $data = $this->generateUserData();

        $this->post(route('user.store'), $data);

        $this->dbAssertion($data);
    }

    /**
     * @test
     */
    public function admin_can_delete_user()
    {
        $this->adminTest();
        $user = factory(User::class)->create();

        $this->delete(route('user.destroy' , [$user->id]))->assertStatus(200);
        $this->assertDatabaseMissing('users', [
            'id' => $user->id
        ]);
    }

    /**
     * @test
     */
    public function user_can_update_user()
    {
        $this->defaultUserTest();
        $this->can_update_user();
    }

    /**
     * @test
     */
    public function admin_can_update_user()
    {
        $this->adminTest();
        $this->can_update_user();
    }

    private function dbAssertion(array $data)
    {
        $this->assertDatabaseHas('users', [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'admin' => (bool)$data['admin'],
        ]);
    }

    private function can_update_user()
    {
        $user = factory(User::class)->create();
        $data = $this->generateUserData();
        $this->put(route('user.update', [$user->id]), $data)->assertStatus(200);
        $this->dbAssertion($data);
    }
}
