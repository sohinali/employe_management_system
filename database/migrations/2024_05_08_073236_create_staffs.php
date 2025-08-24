<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->string('gender');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->string('dob');
            $table->string('doj');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('image');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
