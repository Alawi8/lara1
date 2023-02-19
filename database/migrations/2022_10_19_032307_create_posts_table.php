<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\Auth;


return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
        // table items
            $table->increments('id');
            $table->string('title',60);
            $table->text('content');
            $table->string('writer');
            // $table->foreignId('user_id')->constrained('users');
            $table->string('image_path');
            $table->time('time');      
            $table->date('date');      
            $table->timestamps();
            $table->string('exept');
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
