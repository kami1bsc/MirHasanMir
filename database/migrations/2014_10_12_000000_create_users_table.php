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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("");
            $table->string('phone')->default("");
            $table->string('email')->unique()->default("");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address')->default("");
            $table->string('latitude')->default("");
            $table->string('longitude')->default("");
            $table->string('password')->default("");
            $table->enum('type', USER_TYPES)->default(1); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
