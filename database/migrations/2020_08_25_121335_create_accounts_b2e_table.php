<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsB2eTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_b2e', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('dob');
            $table->string('country');
            $table->string('city');
            $table->text('address_1');
            $table->text('address_2');
            $table->string('mobile');
            $table->string('postal_code');
            $table->string('passport');
            $table->string('type');
            $table->enum('status', ['1', '0']);
            $table->enum('verified', ['1', '0']);
            $table->timestamp('last_login')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('permissions');
            $table->text('applied_for');
            $table->string('commission');
            $table->string('wallet_balance');
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
        Schema::dropIfExists('accounts_b2e');
    }
}
