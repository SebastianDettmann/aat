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

        $period->fresh();

        $this->assertEquals($period->start, $data['start']);
        $this->assertEquals($period->end, $data['end']);
        $this->assertEquals($period->confirmed, $data['confirmed']);

    }

    /**
     * @test
     */
    public function save_any_period_in_db()
    {
        $period = factory(Period::class)->make();

        $data = [
            'start' => $period->start,
            'end' => $period->end,
            'confirmed' => $period->confirmed,

        ];

        $period->save();
        $period->fresh();

        $this->assertEquals($period->start, $data['start']);
        $this->assertEquals($period->end, $data['end']);
        $this->assertEquals($period->confirmed, $data['confirmed']);
    }
}
