<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("count_likes");
            $table->unsignedBigInteger("count_dislikes");

            $table->unsignedBigInteger("article_id");
            $table->foreign("article_id")->references("id")->on("articles")
                ->onUpdate("cascade")
                ->onDelete("cascade");

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
        Schema::dropIfExists('count_likes');
    }
};
