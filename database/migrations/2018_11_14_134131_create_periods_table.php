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
            $table->text('comment')->nullable();
            $table->dateTime('confirmed')->nullable();
            #todo check using nullable
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('reason_id')->unsigned()->nullable();
            $table->timestamps();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
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
                $table->dropForeign('periods_user_id_foreign');
            }
        });
        Schema::dropIfExists('periods');
    }
}
