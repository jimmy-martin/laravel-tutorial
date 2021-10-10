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
            $table->mediumText('content');
            $table->timestamps();

            // On définit une clé étrangère comme cela (méthode plus verbeuse, donc plus parlante)
            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('id')->on('posts');

            // ou comme cela (méthode plus courte, mais moins parlante)
            $table->foreignId('post_id')->constrained();
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
