<?php

namespace Tests\Unit;

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
