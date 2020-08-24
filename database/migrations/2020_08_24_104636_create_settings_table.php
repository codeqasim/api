<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('home_title')->nullable();
            $table->string('site_url');
            $table->addColumn('tinyInteger', 'ssl_url', ['length' => 2])->nullable();;
            $table->string('tag_line')->nullable();;
            $table->string('site_name');
            $table->string('address');
            $table->string('phone')->nullable();;
            $table->string('copyright');
            $table->smallinteger('seo_status');
            $table->text('keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('header_logo_img');
            $table->string('footer_logo_img');
            $table->string('favicon_img')->nullable();
            $table->string('currency_sign')->nullable();
            $table->string('currency_code')->nullable();
            $table->text('google')->nullable();
            $table->string('mapApi')->nullable();
            $table->text('javascript')->nullable();
            $table->enum('reviews', ['Yes', 'No']);
            $table->smallinteger('gallery_approve');
            $table->smallinteger('video_uploads');
            $table->string('default_lang');
            $table->smallinteger('multi_lang');
            $table->string('date_f')->nullable();
            $table->string('date_f_js')->nullable();
            $table->string('license_key')->nullable();
            $table->longtext('local_key')->nullable();
            $table->string('secret_key')->nullable();
            $table->integer('default_city')->nullable();
            $table->string('default_theme');
            $table->text('offline_message')->nullable();
            $table->smallinteger('site_offline');
            $table->addColumn('tinyInteger', 'multi_curr', ['length' => 4]);
            $table->addColumn('tinyInteger', 'booking_expiry', ['length' => 4]);
            $table->addColumn('tinyInteger', 'booking_cancellation', ['length' => 4]);
            $table->addColumn('tinyInteger', 'coupon_code_length', ['length' => 4]);
            $table->string('coupon_code_type');
            $table->string('secure_admin_key');
            $table->addColumn('tinyInteger', 'secure_admin_status', ['length' => 4])->nullable();
            $table->string('secure_supplier_key');
            $table->addColumn('tinyInteger', 'secure_supplier_status', ['length' => 4])->nullable();
            $table->addColumn('tinyInteger', 'allow_registration', ['length' => 4]);
            $table->enum('user_reg_approval', ['Yes', 'No']);
            $table->addColumn('tinyInteger', 'allow_supplier_registration', ['length' => 4]);
            $table->string('default_gateway')->nullable();
            $table->string('searchbox')->nullable();
            $table->addColumn('tinyInteger', 'rss', ['length' => 4]);
            $table->smallinteger('updates_check');
            $table->enum('restrict_website', ['Yes', 'No']);
            $table->string('mobile_redirect_url')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
