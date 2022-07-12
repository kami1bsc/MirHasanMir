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
        Schema::create('majlis_updates', function (Blueprint $table) {
            $table->id();
            $table->text('banner_image')->default("");
            $table->text('title')->default("");
            $table->text('description')->default("");
            $table->text('address')->default("");
            $table->string('date_time')->default("");
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
        Schema::dropIfExists('majlis_updates');
    }
};
