<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('tour_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tour_id');
            $table->text('comment');
            $table->unsignedTinyInteger('communication');
            $table->unsignedTinyInteger('recommend');
            $table->unsignedTinyInteger('service');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_comments');
    }
}
