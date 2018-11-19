<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Reason;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReasonControllerTest extends TestCase
{
    /**
     * @test
     */
    public function admin_can_access_all_controller_functions()
    {
        $this->withAutorization($this->admin);
        $reason = factory(Reason::class)->make();

        $this->get(route('reason.index'))->assertStatus(200);
        $this->get(route('reason.create'))->assertStatus(200);
        $this->followingRedirects()
            ->post(route('reason.store'), $reason->getAttributes())
            ->assertStatus(200);

        $reason->refresh();

        $this->get(route('reason.edit', [$reason->id]))->assertStatus(200);
        $this->followingRedirects()
            ->put(route('user.update', [$reason->id]), factory(Reason::class)->make()->getAttributes())
            ->assertStatus(200);
        $this->followingRedirects()
            ->delete(route('reason.destroy' , [$reason->id]))
            ->assertStatus(200);
    }


    /**
     * @test
     */
    public function user_cant_access_any_controller_functions()
    {
        $this->withAutorization($this->user);
        $reason = factory(Reason::class)->create();

        $this->get(route('reason.index'))->assertStatus(404);
        $this->get(route('reason.create'))->assertStatus(404);
        $this->post(route('reason.store'), $reason->getAttributes())->assertStatus(404);
        $this->get(route('reason.edit', [$reason->id]))->assertStatus(404);
        $this->put(route('user.update', [$reason->id]), $reason->getAttributes())->assertStatus(404);
        $this->delete(route('reason.destroy' , [$reason->id]))->assertStatus(404);
    }



    /**
     * @test
     */
    public function can_store_reason()
    {
        $this->withAutorization($this->admin);
        $data = factory(Reason::class)->make()->getAttributes();

        $this->post(route('user.store'), $data);

        $this->assertDatabaseHas('reasons', $data);
    }

    #TODO cant delete used reasons

    /**
     * @test
     */
    public function can_update_reason()
    {
        $this->withAutorization($this->admin);
        $reason = factory(Reason::class)->create();
        $data = factory(Reason::class)->make()->getAttributes();

        $this->put(route('user.update', [$reason->id]), $data)->assertStatus(200);
        $this->assertDatabaseHas('reason', $data);
    }

    /**
     * @test
     */
    public function can_delete_reason()
    {
        $this->withAutorization($this->admin);
        $reason = factory(Reason::class)->create();

        $this->delete(route('reason.destroy' , [$reason->id]))->assertStatus(200);
        $this->assertDatabaseMissing('reasons', [
            'id' => $reason->id
        ]);
    }
}
