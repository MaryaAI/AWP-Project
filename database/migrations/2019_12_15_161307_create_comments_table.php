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
                     $table->bigIncrements('id');
                     $table->unsignedBigInteger('user_id');
                     $table->unsignedBigInteger('roadster_id');
                     $table->text('comment');
                     $table->timestamps();

                     $table->foreign('user_id')
                           ->references('id')
                           ->on('users')
                           ->onDelete('cascade');

                     $table->foreign('roadster_id')
                           ->references('id')
                           ->on('roadsters')
                           ->onDelete('cascade');
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
