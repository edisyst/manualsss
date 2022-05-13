<?php

use Fureev\Trees\Migrate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuals', function (Blueprint $table) {
//             $table->id();
            $table->uuid('id')->primary();

            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('slug')->nullable();
            $table->string('path')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('manuals');
    }
}
