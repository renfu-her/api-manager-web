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
        Schema::table('api_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->string('prefix_url');
            $table->integer('status')->default(1); // 0 or 1
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('api_categories', function (Blueprint $table) {
            //
        });
    }
};
