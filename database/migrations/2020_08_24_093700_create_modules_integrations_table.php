<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesIntegrationsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('modules_integrations', function (Blueprint $table) {
            $table->id();
            $table->biginteger('modules_id' );
            $table->string('name');             
            $table->decimal('status',1,0);
            $table->integer('order');
            $table->string('markup_b2c');             
            $table->string('markup_b2b');             
            $table->string('markup_b2e');             
            $table->string('c1');             
            $table->string('c2');             
            $table->string('c3');             
            $table->string('c4');             
            $table->string('c5');             
            $table->string('c6');             
            $table->string('c7');             
            $table->string('c8');             
            $table->string('c9');             
            $table->string('c10');             
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
        Schema::dropIfExists('modules_integrations');
    }
}
