<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTablePostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            // On a cette fois-ci seulement créer une migration, et pas de modèle
            // On pourrait même supprimer l'id et les timestamps pour cette table pivot
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // onDelete('cascade') pour encore une fois eviter d'avoir des enregistrements fantômes si on supprime un tag ou un post
            $table->foreignId('tag_id')->constrained()->onDelete('cascade'); // onDelete('cascade') pour encore une fois eviter d'avoir des enregistrements fantômes si on supprime un tag ou un post
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
        Schema::dropIfExists('pivot_table_post_tag');
    }
}
