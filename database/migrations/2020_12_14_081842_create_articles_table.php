<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->String('title', 191);
            $table->String('thumbnail', 191);
            $table->String('slug', 191);
            $table->text('body');
            $table->smallInteger('enabled');
            $table->smallInteger('commentable');
            $table->String('document', 191)->nullable();
            $table->String('link_document', 191)->nullable();
            $table->integer('read_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
