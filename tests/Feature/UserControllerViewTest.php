<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class UserControllerViewTest extends TestCase
{
    /** @test */
    public function admin_can_see_user_index()
    {
        $this->withAutentification($this->admin);

        $this->get(route('user.index'))->assertSee('Alle User');
        $this->get(route('user.index'))->assertViewHas('users');
    }

    /** @test */
    public function admin_can_see_user_create()
    {
        $this->withAutentification($this->admin);

        $this->get(route('user.create'))->assertSee('User anlegen');
    }

    /** @test */
    public function admin_can_see_user_edit()
    {
        $this->withAutentification($this->admin);
        $user = User::first();

        $this->get(route('user.edit', [$user->id]))->assertSee('User bearbeiten');
        $this->get(route('user.edit', [$user->id]))->assertViewHas('user');
    }

    /** @test */
    public function default_user_can_see_default_user_edit()
    {
        $this->withAutentification($this->user);
        $user = auth()->user();

        $this->get(route('user.edit', [$user->id]))->assertSee('User bearbeiten');
        $this->get(route('user.edit', [$user->id]))->assertViewHas('user');
    }
}
