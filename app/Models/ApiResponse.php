<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiResponsesTable extends Migration
{
    public function up()
    {
        Schema::create('api_responses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('level')->default(0);
            $table->string('type');
            $table->boolean('is_required')->default(0); // 0 or 1
            $table->string('content');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_responses');
    }
}
