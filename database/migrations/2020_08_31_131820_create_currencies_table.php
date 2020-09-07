<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol')->nullable();
            $table->string('code');
            $table->float('rate');
            $table->addColumn('tinyInteger', 'decimals', ['length' => 1])->nullable();
            $table->enum('placement', ['before','after']);
            $table->addColumn('tinyInteger', 'order', ['length' => 1])->nullable();
            $table->enum('default', ['1', '0']);
            $table->enum('active', ['1', '0']);
            $table->enum('featured', ['1', '0']);
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
        Schema::dropIfExists('currencies');
    }
}
