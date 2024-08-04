<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->boolean('is_apprv');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('apprv_by')->constrained('users');
            $table->foreignId('tag_id')->constrained('tags');
//            $table->foreignId('comment_id')->constrained('comments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
