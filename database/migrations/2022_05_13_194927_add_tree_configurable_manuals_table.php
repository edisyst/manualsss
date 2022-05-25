<?php

use Fureev\Trees\Migrate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTreeConfigurableManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manuals', function (Blueprint $table) {
//             $table->uuid('id')->primary();
            Migrate::columns($table, (new App\Models\Manual)->getTreeConfig());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manuals', function (Blueprint $table) {
            //
        });
    }
}
