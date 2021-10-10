<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            // on peut dire qu'un champ peut être null de cette façon
            // $table->string('path')->nullable();
            // on peut aussi définir une valeur par défaut comme ceci
            $table->string('path')->default('default.png');
            $table->timestamps();

            // le onDelete('cascade') permet de dire que si je supprime un jour
            // le post auquel est relié l'image
            // alors l'image aussi se supprimera, afin de ne pas laisser d'enregistrement fantôme dans la bdd
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
