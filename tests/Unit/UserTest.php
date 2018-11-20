<?php

namespace Tests\Unit;

use App\Period;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function save_a_user_in_db()
    {
        $data = [
            'firstname' => 'Max',
            'lastname' => 'Mustermann',
            'email' => 'muster@email.de',
            'admin' => false,
            'password' => bcrypt('Qwertz123'),
        ];

        $user = User::create($data);
        $this->dbAssertion($user);
    }

    /**
     * @test
     */
    public function save_any_user_in_db()
    {
        $user = factory(User::class)->create();
        $this->dbAssertion($user);
    }

    /**
     * @test
     */
    public function user_period_relationship()
    {
        $user = factory(User::class)->create();
        $period = factory(Period::class)->create();
        $user->periods()->save($period);

        $this->assertEquals($user->periods->find($period->id)->id, $period->id);
    }

    private function dbAssertion(User $user)
    {
        $this->assertDatabaseHas('users', [
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'admin' => (bool)$user->admin,
            'password' => $user->password,
        ]);
    }
}
