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
            $table->string('cover_photo')->nullable();
            $table->string('title');
            $table->string('sub_title');
            $table->longText('description');
            $table->unsignedBigInteger('author_id');
            $table->dateTimeTz('date_published')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1-published|2-draft');
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
