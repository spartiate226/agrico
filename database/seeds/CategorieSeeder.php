<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categorie::class)->create(['nom'=>'Cereales']);
        factory(Categorie::class)->create(['nom'=>'Oleagineux']);
        factory(Categorie::class)->create(['nom'=>'Fruits']);
        factory(Categorie::class)->create(['nom'=>'Legumes consommations imediates']);
        factory(Categorie::class)->create(['nom'=>'Legumes transformations']);
    }
}
