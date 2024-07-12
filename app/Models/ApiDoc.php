<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiDocsTable extends Migration
{
    public function up()
    {
        Schema::create('api_docs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('url');
            $table->string('methods');
            $table->unsignedBigInteger('query_id')->nullable();
            $table->json('query_json')->nullable();
            $table->json('headers')->nullable();
            $table->unsignedBigInteger('request_id')->nullable();
            $table->json('request_json')->nullable();
            $table->unsignedBigInteger('response_id')->nullable();
            $table->json('response_json')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_docs');
    }
}
