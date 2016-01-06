<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->integer('client_id');
            $table->string('name', 255);
            $table->string('description', 255);
            $table->integer('progress');
            $table->string('status', 1);
            $table->dateTime('due_date');
            $table->timestamps();
            # relationships
            $table->foreign('owner_id')
                  ->references('id')->on('users');
            $table->foreign('client_id')
                  ->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
