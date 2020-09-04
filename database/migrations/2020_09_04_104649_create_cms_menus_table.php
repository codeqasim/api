<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['1', '0'])->nullable();
            $table->enum('header', ['1', '0'])->nullable();
            $table->enum('footer', ['1', '0'])->nullable();
            $table->enum('order', ['1', '0'])->nullable();
            $table->biginteger('parent');
            $table->enum('target', ['1', '0'])->nullable();
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
        Schema::dropIfExists('cms_menus');
    }
}
