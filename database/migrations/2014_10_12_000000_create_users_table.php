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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('user_type')->default(0); // O => user , 1 => super admin , 2 => admin, 3 => publisher
            $table->tinyInteger('activation_status')->default(0); // 0 => not active , 1 => active
            $table->tinyInteger('super_admin_approved')->default(0); // 0 => not approved , 1 => approved
            $table->integer('approved_by')->nullable(); // 0 => not approved , 1 => approved
            $table->datetime('approved_date')->nullable();
            $table->rememberToken();
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
