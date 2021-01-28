<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger("video_id")->nullable();
            $table->string('url');
            $table->string('result');

            $table->foreign('video_id')->references("id")

      

            ->on("course_videos")
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->timestamps();
        });
        Schema::create('student_tasks', function (Blueprint $table) {
            
            $table->unsignedBigInteger("user_id")->nullable();

            $table->foreign('user_id')->references("id")
            ->on("users")
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->unsignedBigInteger("task_id")->nullable();


            $table->foreign('task_id')->references("id")
            ->on("tasks")
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->integer('marks');
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
        Schema::dropIfExists('student_tasks');
        Schema::dropIfExists('tasks');
    }
}
