<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_permission', function (Blueprint $table) {
            $table->id();
            $table->biginteger('accounts_id');
            $table->enum('add', ['1', '0']);
            $table->enum('edit', ['1', '0']);
            $table->enum('view', ['1', '0']);
            $table->enum('delete', ['1', '0']);
            $table->string('modules');
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
        Schema::dropIfExists('accounts_permission');
    }
}
