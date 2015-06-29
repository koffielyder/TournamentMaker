<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletedTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleted_teams', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('name');
            $table->integer('captain_id');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('deleted_teams');
    }
}
