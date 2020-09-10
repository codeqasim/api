<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesGlobleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages_globle_translations', function (Blueprint $table) {
            $table->id();
            $table->string('module');
            $table->biginteger('module_id');
            $table->string('language');
            $table->text('t1');
            $table->text('t2');
            $table->text('t3');
            $table->text('t4');
            $table->text('t5');
            $table->text('t6');
            $table->text('t7');
            $table->text('t8');
            $table->text('t9');
            $table->text('t10');
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
        Schema::dropIfExists('languages_globle_translations');
    }
}
