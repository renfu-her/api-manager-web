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
        Schema::table('api_responses', function (Blueprint $table) {
            $table->string('name');
            $table->integer('level')->default(0);
            $table->string('type');
            $table->boolean('is_required')->default(0); // 0 or 1
            $table->string('content');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('api_responses', function (Blueprint $table) {
            //
        });
    }
};
