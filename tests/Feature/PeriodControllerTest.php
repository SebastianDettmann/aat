<?php

namespace Tests\Feature;

use App\Period;
use Carbon\Carbon;
use Tests\TestCase;

class PeriodControllerTest extends TestCase
{
    /** @test */
    public function user_can_access_controller_functions()
    {
        $this->withAutentification($this->user);
        $period = factory(Period::class)->make(['user_id' => $this->user->id]);

        $this->get(route('period.index'))->assertStatus(200);
        $this->get(route('period.indexall'))->assertStatus(200);
        $this->followingRedirects()
            ->post(route('period.store'), $period->getAttributes())
            ->assertStatus(200);

        $period = factory(Period::class)->create();
        $this->user->periods()->save($period);

        $this->followingRedirects()
            ->delete(route('period.destroy' , [$period->id]))
            ->assertStatus(200);
    }

    /** @test */
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

    /** @test */
    public function can_delete_period()
    {
        $this->withAutentification($this->user);
        $start = (rand(1, 30));
        $period = factory(Period::class)->create([
            'start' => Carbon::today()->addDays($start)->toDateString(),
            'end' => Carbon::today()->addDays($start + rand(0, 30))->toDateString(),
        ]);
        $this->user->periods()->save($period);

        $this->delete(route('period.destroy' , [$period->id]))->assertStatus(200);
        $this->assertDatabaseMissing('periods', [
            'id' => $period->id
        ]);
    }

    /** @test */
    public function cant_delete_period_lte_today()
    {
        $this->withAutentification($this->user);
        $end = (rand(1, 30));
        $period = factory(Period::class)->create([
            'start' => Carbon::today()->subDays($end + rand(0, 30))->toDateString(),
            'end' => Carbon::today()->subDays($end)->toDateString(),
        ]);
        $this->user->periods()->save($period);

        $this->delete(route('period.destroy', [$period->id]))
            ->assertStatus(200)
            ->assertSee(trans('alerts.save_failed'));
        $this->assertDatabaseHas('periods', [
            'id' => $period->id,
        ]);
    }
}
