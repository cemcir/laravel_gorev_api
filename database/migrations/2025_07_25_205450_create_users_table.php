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
        Schema::create('users', function (Blueprint $table) {
            $table->id('userId');
            $table->string('username',100);
            $table->string('password',100);
            $table->string('name',100);
            $table->string('surname',100);
            $table->string('email',100);
            $table->string('phone',100);
            $table->enum('role',['admin','user'])->default('user');
            $table->boolean('active')->default(true);
            $table->date('lastLoginDate')->nullable();
            $table->string('image',500)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
