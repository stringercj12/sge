<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
                    
            $table->string('to', 60);
            $table->string('cc')->nullable();
            $table->string('subject');
            $table->text('message');
            $table->string('files', 200)->nullable();
            $table->string('status');
            $table->softDeletes();
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
        Schema::dropIfExists('emails');
    }
}
