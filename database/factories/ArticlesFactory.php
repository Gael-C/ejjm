<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titre = fake()->sentence($nbWords = 6, $variableNbWords = true);
        return [
                'titre' => $titre,
                'slug' => Str::slug($titre),
                'contenu' => fake()->paragraphs(3, true),
                'images' => json_encode([fake()->imageUrl()]),
                'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
