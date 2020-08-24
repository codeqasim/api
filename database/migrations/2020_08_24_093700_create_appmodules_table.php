<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appmodules', function (Blueprint $table) {
            $table->id();
            $table->enum('parent_id', ['hotels', 'flights','tours','cars','visa','reviews','extra','rental']);
            $table->string('name');             
            $table->decimal('status',1,0);
            $table->integer('order');
            $table->string('markup');             
            $table->string('c1');             
            $table->string('c2');             
            $table->string('c3');             
            $table->string('c4');             
            $table->string('c5');             
            $table->string('c6');             
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
        Schema::dropIfExists('appmodules');
    }
}
