<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('album_id')->nullable();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->string('video_title')->default("");
            $table->text('video_description')->nullable();
            $table->text('preview_url')->default("");
            $table->text('youtube_url')->default("");            
            $table->text('spotify_url')->default("");
            $table->text('apple_music_url')->default("");
            $table->text('amazon_music_url')->default("");
            $table->string('islamic_month')->default("");
            $table->longText('lyrics')->default("");
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
        Schema::dropIfExists('videos');
    }
};
