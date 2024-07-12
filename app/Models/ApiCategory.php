<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('api_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->string('prefix_url');
            $table->integer('status')->default(1); // 0 or 1
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_categories');
    }
}
