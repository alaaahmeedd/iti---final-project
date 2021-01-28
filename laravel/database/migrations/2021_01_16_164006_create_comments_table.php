<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->unsignedBigInteger("user_id")->nullable();

            $table->foreign('user_id')->references("id")
            ->on("users")
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->unsignedBigInteger("video_id")->nullable();

            $table->foreign('video_id')->references("id")
            ->on("course_videos")
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
        Schema::dropIfExists('comments');
    }
}
