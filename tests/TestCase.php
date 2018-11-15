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

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        // when using sqlite, allow foreign keys
        if (\DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
            \DB::statement(\DB::raw('PRAGMA foreign_keys=1'));
        }

        return $app;
    }

    /**
     * Set up the test
     */
    public function setUp()
    {
        parent::setUp();

        $this->withoutMiddleware();
        #$this->withoutExceptionHandling();
        $this->artisan('db:seed');
        $this->faker = Faker::create();
        $this->user = factory(User::class)->create();
    }
    /**
     * Reset the migrations
     */
    public function tearDown()
    {
        parent::tearDown();
    }
}
