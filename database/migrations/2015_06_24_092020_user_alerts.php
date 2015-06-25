<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAlerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alert_id');
            $table->integer('user_id');
            $table->integer('team_id');
            $table->boolean('by_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_alerts');
    }
}
