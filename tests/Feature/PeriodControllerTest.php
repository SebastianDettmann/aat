<?php

namespace Tests\Feature;

use App\Period;
use Tests\TestCase;

class PeriodControllerTest extends TestCase
{
    /**@test */
    public function user_can_access_controller_functions()
    {
        $this->withAutentification($this->user);
        $period = factory(Period::class)->make(['user_id' => $this->user->id]);

        $this->get(route('period.index', [rand(2000, 2020), rand(1, 12)]))->assertStatus(200);
        $this->get(route('period.indexall',[rand(2000, 2020), rand(1, 12)]))->assertStatus(200);
        $this->get(route('period.create'))->assertStatus(200);
        $this->followingRedirects()
            ->post(route('period.store'), $period->getAttributes())
            ->assertStatus(200);

        $period = factory(Period::class)->create();
        $this->user->periods()->save($period);

        $this->followingRedirects()
            ->get(route('period.show', [$period->id]))
            ->assertStatus(200);
        $this->followingRedirects()
            ->delete(route('period.destroy' , [$period->id]))
            ->assertStatus(200);
    }

    /**@test */
    public function can_store_period()
    {
        $this->withAutentification($this->user);
        $data = factory(Period::class)->make()->getAttributes();

        $this->post(route('period.store'), $data);

        $this->assertDatabaseHas('periods', [
            'start' => $data['start'],
            'end' => $data['end']
        ]);
    }

    //TODO cant delete old periods

    /**@test */
    public function can_delete_period()
    {
        $this->withAutentification($this->user);
        $period = factory(Period::class)->create();
        $this->user->periods()->save($period);

        $this->delete(route('period.destroy' , [$period->id]))->assertStatus(200);
        $this->assertDatabaseMissing('periods', [
            'id' => $period->id
        ]);
    }
}
