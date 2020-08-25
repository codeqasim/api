<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomecolumnToModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->string("c7")->after('c6');
            $table->string("c8")->after('c7');
            $table->string("c9")->after('c8');
            $table->string("c10")->after('c9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->dropColumn('c7');
            $table->dropColumn('c8');
            $table->dropColumn('c9');
            $table->dropColumn('c10');
        });
    }
}
