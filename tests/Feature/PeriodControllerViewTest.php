<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Period;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeriodControllerViewTest extends TestCase
{
    /**
     * @test
     */
    public function can_see_period_index()
    {
        $this->withAutorization($this->user);

        $this->get(route('period.index',[rand(2000, 2020), rand(1, 12)]))->assertSee('Alle Zeiträume');
        $this->get(route('period.index',[rand(2000, 2020), rand(1, 12)]))->assertViewHas('periods');
    }

    /**
     * @test
     */
    public function can_see_period_index_all()
    {
        $this->withAutorization($this->user);

        $this->get(route('period.indexall',[rand(2000, 2020), rand(1, 12)]))->assertSee('Alle Zeiträume für alle User');
        $this->get(route('period.indexall',[rand(2000, 2020), rand(1, 12)]))->assertViewHas('periods');
    }

    /**
     * @test
     */
    public function can_see_period_create()
    {
        $this->withAutorization($this->user);

        $this->get(route('period.create'))->assertSee('Zeitraum anlegen');
    }

    /**
     * @test
     */
    public function can_see_period_show()
    {
        $this->withAutorization($this->user);
        $period = factory(Period::class)->create();
        $this->user->periods()->save($period);

        $this->get(route('period.show', [$period->id]))->assertSee('Zeitraum anzeigen');
        $this->get(route('period.show', [$period->id]))->assertViewHas('period');
    }
}
