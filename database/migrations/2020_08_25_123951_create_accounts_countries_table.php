<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsCountriesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso');
            $table->string('iso3');
            $table->string('name');
            $table->string('nicename');
            $table->string('numcode');
            $table->string('phonecode');
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
        Schema::dropIfExists('accounts_countries');
    }
}
