<?php

namespace Tests\Feature;

use App\Reason;
use Tests\TestCase;

class ReasonControllerViewTest extends TestCase
{
    /** @test */
    public function can_see_reason_index()
    {
        $this->withAutentification($this->admin);

        $this->get(route('reason.index'))->assertSee('Alle Gründe');
        $this->get(route('reason.index'))->assertViewHas('reasons');
    }

    /** @test */
    public function can_see_reason_create()
    {
        $this->withAutentification($this->admin);

        $this->get(route('reason.create'))->assertSee('Grund anlegen');
    }

    /** @test */
    public function can_see_reason_edit()
    {
        $this->withAutentification($this->admin);
        $reason = Reason::first();

        $this->get(route('reason.edit', [$reason->id]))->assertSee('Grund bearbeiten');
        $this->get(route('reason.edit', [$reason->id]))->assertViewHas('reason');
    }
}
