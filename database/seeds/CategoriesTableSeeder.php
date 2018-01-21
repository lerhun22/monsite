<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Paysages',
        ]);
        Category::create([
            'name' => 'Portraits',
        ]);
        Category::create([
            'name' => 'Drone - Communes',
        ]);
        Category::create([
            'name' => 'Drone - Paysages',
        ]);
        Category::create([
            'name' => 'Drone - Artisans',
        ]);
        Category::create([
            'name' => 'Drone - Immobilier',
        ]);
        Category::create([
            'name' => 'Drone - Particuliers',
        ]);
        Category::create([
            'name' => 'Drone - Littoral',
        ]);
        Category::create([
            'name' => 'Sous-marin',
        ]);
        Category::create([
            'name' => 'Macro',
        ]);

    }
}
