<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Period;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeriodControllerTest extends TestCase
{
    /**
     * @test
     */
    public function user_can_access_controller_functions()
    {
        $this->withAutorization($this->user);
        $period = factory(Period::class)->make(['user_id' => $this->user->id]);

        $this->get(route('period.index', [rand(2000, 2020), rand(1, 12)]))->assertStatus(200);
        $this->get(route('period.indexall',[rand(2000, 2020), rand(1, 12)]))->assertStatus(200);
        $this->get(route('period.create'))->assertStatus(200);
        $this->followingRedirects()
            ->post(route('period.store'), $period->getAttributes())
            ->assertStatus(200);

        $period = factory(Period::class)->create(['user_id' => $this->user->id]);

        $this->get(route('period.edit', [$period->id]))->assertStatus(200);
        $this->followingRedirects()
            ->put(route('period.update', [$period->id]), factory(Period::class)->make()->getAttributes())
            ->assertStatus(200);
        $this->followingRedirects()
            ->delete(route('period.destroy' , [$period->id]))
            ->assertStatus(200);
    }

    /**
     * @test
     */
    public function user_cant_access_confirm()
    {
        $this->withAutorization($this->user);
        $period = factory(Period::class)->make(['user_id' => $this->user->id]);

        $this->followingRedirects()
            ->patch(route('period.confirm' , [$period->id]))
            ->assertStatus(404);
    }

    /**
     * @test
     */
    public function admin_can_access_confirm()
    {
        $this->withAutorization($this->admin);
        $period = factory(Period::class)->make(['user_id' => $this->user->id]);

        $this->followingRedirects()
            ->patch(route('period.confirm' , [$period->id]))
            ->assertStatus(200);
    }

    /**
     * @test
     */
    public function can_store_period()
    {
        $this->withAutorization($this->user);
        $data = factory(Period::class)->make()->getAttributes();

        $this->post(route('period.store'), $data);

        $this->assertDatabaseHas('periods', $data);
    }

    #TODO cant delete and update old periods and periods with confirmed reasons

    /**
     * @test
     */
    public function can_update_period()
    {

        $this->withAutorization($this->user);
        $period = factory(Period::class)->create(['user_id' => $this->user->id]);
        $data = factory(Period::class)->make()->getAttributes();

        $this->put(route('period.update', [$period->id]), $data)->assertStatus(200);
        $this->assertDatabaseHas('periods', $data);
    }

    /**
     * @test
     */
    public function can_delete_period()
    {
        $this->withAutorization($this->user);
        $period = factory(Period::class)->create(['user_id' => $this->user->id]);

        $this->delete(route('period.destroy' , [$period->id]))->assertStatus(200);
        $this->assertDatabaseMissing('periods', [
            'id' => $period->id
        ]);
    }
}
