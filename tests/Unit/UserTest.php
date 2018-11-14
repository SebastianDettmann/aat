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
    public function save_user_in_db()
    {
        $data = [
            'firstname' => 'Max',
            'lastname' => 'Mustermann',
            'email' => 'muster@email.de',
            'admin' => false
        ];

        $user = User::create($data);

        $user->fresh();

        $this->assertEquals($user->firstname, $data['firstname']);
        $this->assertEquals($user->lastname, $data['lastname']);
        $this->assertEquals($user->email, $data['email']);
        $this->assertEquals($user->admin, $data['admin']);
    }
}
