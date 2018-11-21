<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Period;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfirmControllerViewTest extends TestCase
{
     /**
     * @test
     */
    public function admin_can_see_confirm_index()
    {
        $this->withAutorization($this->admin);

        $this->get(route('confirm.index'))->assertSee('Zeitraum bestätigen');
    }
}
