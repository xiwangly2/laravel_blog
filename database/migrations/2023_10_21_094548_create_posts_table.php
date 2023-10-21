<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // 自动生成一个自增主键
            $table->string('title');
            $table->text('content');
            $table->timestamps(); // 自动生成 created_at 和 updated_at 字段
        });
    }


    /**
     * Reverse the migrations.
     */

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
