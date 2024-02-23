<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        // table items
            $table->increments('id');
            $table->string('title',60);
            $table->string('slug');
            $table->text('content');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('url');
            $table->string('img_url');   
            $table->integer('category_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posts');

    }
};