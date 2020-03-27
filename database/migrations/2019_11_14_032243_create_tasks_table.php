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
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            // $table->date('task_date');
            $table->string('date_start');
            $table->string('date_end');
            $table->string('image_event')->nullable();
            $table->string('color')->nullable()->default('#fff');
            $table->string('backgroundColor')->nullable()->default('#00a65a');
            $table->string('status')->nullable()->default('Ativo');
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
        Schema::dropIfExists('tasks');
    }
}
