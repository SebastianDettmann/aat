<?php

namespace Tests\Feature;

use App\Http\Controllers\UserController;
use App\Period;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfirmControllerTest extends TestCase
{
       /**
     * @test
     */
    public function user_cant_access_functions()
    {
        $this->withAutorization($this->user);

        $this->followingRedirects()
            ->get(route('confirm.index'))
            ->assertStatus(404);

        $this->followingRedirects()
            ->post(route('confirm.confirm'))
            ->assertStatus(404);
    }

    /**
     * @test
     */
    public function admin_can_access_functions()
    {
        $this->withAutorization($this->admin);

        $this->followingRedirects()
            ->get(route('confirm.index'))
            ->assertStatus(200);

        factory(Period::class, 10)->create();

        session([
            'periods_unconfirmed' => [1, 2, 3, 4, 5],
            'periods_confirmed' => [5, 6, 7, 9, 10],
        ]);

        $this->followingRedirects()
            ->post(route('confirm.confirm' , [
                'periods_new_confirmed' => [1, 2, 3],
                'periods_confirmed' => [5, 6, 7],
                ]))
            ->assertStatus(200);
    }
}
