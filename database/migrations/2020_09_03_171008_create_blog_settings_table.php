<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('target',['self','blank']);
            $table->string('title');
            $table->string('feature_blogs');
            $table->string('listing_blogs');
            $table->string('search_blogs');
            $table->string('related_blogs');
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
        Schema::dropIfExists('blog_settings');
    }
}
