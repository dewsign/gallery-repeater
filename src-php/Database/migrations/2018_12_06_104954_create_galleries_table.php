<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nrb_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('style')->nullable();
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->string('cta_title')->nullable();
            $table->string('cta_url')->nullable();
            $table->timestamps();
        });

        Schema::create('nrb_gallery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('style')->nullable();
            $table->text('title')->nullable();
            $table->text('image')->nullable();
            $table->text('image_alt')->nullable();
            $table->text('link')->nullable();
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
        Schema::dropIfExists('nrb_gallery_items');
        Schema::dropIfExists('nrb_galleries');
    }
}
