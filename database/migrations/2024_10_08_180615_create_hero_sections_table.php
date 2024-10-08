<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->string('image'); // for the hero image URL
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_sections');
    }
}
