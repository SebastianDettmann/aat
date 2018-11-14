<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations, DatabaseTransactions;

    protected $faker;
    protected $user;

    /**
     * Set up the test
     */
    public function setUp()
    {
        parent::setUp();
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();
        $this->artisan('db:seed');
        $this->faker = Faker::create();
        $this->user = factory(User::class)->create();
    }
    /**
     * Reset the migrations
     */
    public function tearDown()
    {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }
}
