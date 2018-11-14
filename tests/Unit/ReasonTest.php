<?php

namespace Tests\Unit;

use App\Reason;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReasonTest extends TestCase
{
    /**
     * @test
     */
    public function save_a_reason_in_db()
    {
        $data = [
            'title' => 'Urlaub',
            'description' => 'Erholungsurlaub',
            'color' => '#4169e1',
            'has_to_confirm' => true,
        ];

        $reason = Reason::create($data);
        $this->dbAassertion($reason);
    }

    /**
     * @test
     */
    public function save_any_reason_in_db()
    {
        $reason = factory(Reason::class)->create();
        $this->dbAassertion($reason);
    }

    private function dbAassertion(Reason $reason)
    {
        $this->assertDatabaseHas('reasons', [
            'title' => $reason->title,
            'description' => $reason->description,
            'color' => $reason->color,
            'has_to_confirm' => $reason->has_to_confirm
        ]);
    }
}
