<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('company_id')->unsigned();
            $table->integer('conferencetype_id')->unsigned();
            $table->date('date')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('conferencetype_id')->references('id')->on('conference_types')
            ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
