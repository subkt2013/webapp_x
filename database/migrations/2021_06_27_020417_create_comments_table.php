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
            $table->bigInteger('id', true)->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('page_id')->unsigned();
            $table->string('answer');
            $table->string('file_url');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('page_id')->references('id')->on('pages'); 
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
