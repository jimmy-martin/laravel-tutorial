<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'created_at' => now()
        ];

        // pour utiliser la fcatory, on doit :
        // faire la commande " php artisan tinker " pour ouvrir la console laravel
        // ensuite " Post::factory()->count(10)->create() "
        // on indique d'abord le model pour lequel on souhaite utiliser la factory
        // esnuite, le nombre de lignes que l'on souhaite créer
        // puis la fonction create afin de créer les fausses données

    }
}
