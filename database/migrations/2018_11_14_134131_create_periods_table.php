<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start');
            $table->date('end');
            $table->date('confirmed')->nullable();
            $table->integer('reason_id')->unsigned()->nullable();
            $table->timestamps();
            $table
                ->foreign('reason_id')
                ->references('id')
                ->on('reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periods', function(Blueprint $table) {
            if (DB::getDriverName() !== 'sqlite') {
                $table->dropForeign('periods_reason_id_foreign');
            }
        });
        Schema::dropIfExists('periods');
    }
}
