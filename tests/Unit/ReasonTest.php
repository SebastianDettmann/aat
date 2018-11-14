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

        $reason->fresh();

        $this->assertEquals($reason->title, $data['title']);
        $this->assertEquals($reason->description, $data['description']);
        $this->assertEquals($reason->color, $data['color']);
        $this->assertEquals($reason->has_to_confirm, $data['has_to_confirm']);
    }

    /**
     * @test
     */
    public function save_any_reason_in_db()
    {
        $reason = factory(Reason::class)->make();

        $data = [
            'title' => $reason->title,
            'description' => $reason->description,
            'color' => $reason->color,
            'has_to_confirm' => $reason->has_to_confirm,
        ];

        $reason->save();
        $reason->fresh();

        $this->assertEquals($reason->title, $data['title']);
        $this->assertEquals($reason->description, $data['description']);
        $this->assertEquals($reason->color, $data['color']);
        $this->assertEquals($reason->has_to_confirm, $data['has_to_confirm']);
    }
}
