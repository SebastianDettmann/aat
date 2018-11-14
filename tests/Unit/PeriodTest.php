<?php

namespace Tests\Unit;

use App\Period;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeriodTest extends TestCase
{
    /**
     * @test
     */
    public function save_a_period_in_db()
    {
        $data = [
            'start' => Carbon::today(),
            'end' => Carbon::tomorrow(),
            'confirmed' => null,
        ];

        $period = Period::create($data);

        $this->dbAssertion($period);
    }

    /**
     * @test
     */
    public function save_any_period_in_db()
    {
        $period = factory(Period::class)->create();
        $this->dbAssertion($period);
    }

    private function dbAssertion(Period $period)
    {

        $this->assertDatabaseHas('periods', [
            'start' => $period->start,
            'end' => $period->end,
            'confirmed' => $period->confirmed
        ]);
    }
}
